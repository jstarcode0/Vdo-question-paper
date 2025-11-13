<?php
session_start();
header('Content-Type: application/json');

// Security check: ensure user is logged in
if (!isset($_SESSION['rollnumber'])) {
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit();
}

require_once 'questions.php';

// Get the request body sent from JavaScript
$request_data = json_decode(file_get_contents('php://input'), true);
$action = $request_data['action'] ?? null;

$response = ['success' => false];

switch ($action) {
    case 'get_question':
        $q_num = (int)($request_data['q_num'] ?? 1);
        $lang = $request_data['lang'] ?? 'en';
        
        $all_questions = get_questions();
        if (isset($all_questions[$q_num])) {
            $response['success'] = true;
            $response['question'] = $all_questions[$q_num][$lang];
        } else {
            $response['error'] = 'Invalid question number';
        }
        break;

    case 'save_answer':
        $q_num = (int)($request_data['q_num'] ?? 0);
        $answer = $request_data['answer'] ?? null;
        
        if ($q_num > 0 && $answer !== null) {
            if (!isset($_SESSION['user_answers'])) {
                $_SESSION['user_answers'] = [];
            }
            $_SESSION['user_answers'][$q_num] = $answer;
            $response['success'] = true;
        } else {
            $response['error'] = 'Invalid data for saving answer';
        }
        break;

    default:
        $response['error'] = 'Invalid action';
        break;
}

// Send the JSON response back to the JavaScript
echo json_encode($response);
?>