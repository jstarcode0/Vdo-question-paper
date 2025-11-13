<?php
session_start();
require_once 'questions.php';

// Security check: if no roll number, redirect to login
if (!isset($_SESSION['rollnumber'])) {
    header('Location: index.php');
    exit();
}

// --- NEW LOGIC: Load answers from the session ---
$user_answers = $_SESSION['user_answers'] ?? [];
$correct_answers = get_correct_answers();

// --- Score Calculation Logic (Unchanged) ---
$total_questions = 160;
$marks_per_question = 200 / 160;
$negative_marking = $marks_per_question / 3;

$score = 0; $attempted = 0; $correct_count = 0; $incorrect_count = 0;

for ($i = 1; $i <= $total_questions; $i++) {
    if (isset($user_answers[$i]) && $user_answers[$i] !== 'E') {
        $attempted++;
        if ($user_answers[$i] == $correct_answers[$i]) {
            $correct_count++;
            $score += $marks_per_question;
        } else {
            $incorrect_count++;
            $score -= $negative_marking;
        }
    }
}
$unattempted = $total_questions - $attempted;
$score = ($score < 0) ? 0 : $score;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OMR Result Sheet</title>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <style>
        /* All visual CSS is unchanged */
        body { background-color: #dcdcdc; display: flex; flex-direction: column; align-items: center; padding: 40px 0; }
        #omr-sheet {
            width: 780px; 
            background-color: #ffeff2;
            border: 2px solid #aaa;
            padding: 25px;
            font-family: 'Courier Prime', monospace;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            margin-top: 20px;
        }
        .header { text-align: center; border-bottom: 2px solid #aaa; padding-bottom: 15px; }
        .header h1 { font-family: 'Roboto', sans-serif; margin: 0; color: #d9534f; font-size: 24px; }
        .header h2 { margin: 5px 0 0; font-size: 18px; font-family: 'Roboto', sans-serif; }
        .made-by-credit { margin-top: 10px; font-size: 14px; color: #555; font-family: 'Roboto', sans-serif; }
        .student-details { display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px dashed #aaa; }
        .summary-box { border: 2px solid #aaa; margin: 20px 0; padding: 15px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
        .summary-item { font-size: 14px; }
        .final-score { text-align: center; margin: 20px 0; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 500; }
        .final-score span { font-size: 28px; font-weight: bold; color: #d9534f; background: #fff; padding: 10px 20px; border-radius: 8px; border: 2px solid #d9534f; }
        .omr-grid { display: flex; justify-content: space-between; gap: 10px; margin-top: 25px; }
        .omr-column { display: flex; flex-direction: column; gap: 8px; }
        .answer-block { display: flex; align-items: center; }
        .answer-block strong { font-size: 12px; width: 45px; text-align: right; margin-right: 5px; }
        .bubbles { display: flex; gap: 3px; }
        .bubble { width: 16px; height: 16px; border: 1.5px solid #333; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 10px; font-weight: bold; color: black; }
        .bubble.correct { background-color: #28a745; border-color: #1e7e34; color: white; }
        .bubble.incorrect { background-color: #dc3545; border-color: #bd2130; color: white; font-size: 14px; line-height: 1; }
        .bubble.missed-correct { border: 2px solid #28a745; }
        .bubble.unattempted { background-color: #e2e3e5; border-color: #adb5bd; }
    </style>
</head>
<body>
    <div id="omr-sheet">
        <!-- The entire visible content remains exactly the same -->
        <div class="header">
            <h1>RAJASTHAN STAFF SELECTION BOARD, JAIPUR</h1>
            <h2>VILLAGE DEVELOPMENT OFFICER (VDO) RECRUITMENT - 2025 (K23L)</h2>
            <div class="made-by-credit">made by Jitender Swami ❤️</div>
        </div>
        <div class="student-details">
            <div><strong>CANDIDATE NAME:</strong> <?= htmlspecialchars(strtoupper($_SESSION['name'])) ?></div>
            <div><strong>ROLL NUMBER:</strong> <?= htmlspecialchars(strtoupper($_SESSION['rollnumber'])) ?></div>
        </div>
        <div class="summary-box">
            <div class="summary-item"><strong>TOTAL QUESTIONS:</strong> <?= $total_questions ?></div>
            <div class="summary-item"><strong>ATTEMPTED:</strong> <?= $attempted ?></div>
            <div class="summary-item"><strong>UNATTEMPTED:</strong> <?= $unattempted ?></div>
            <div class="summary-item"><strong>CORRECT:</strong> <?= $correct_count ?></div>
            <div class="summary-item"><strong>INCORRECT:</strong> <?= $incorrect_count ?></div>
            <div class="summary-item"><strong>MARKS/QUES:</strong> <?= number_format($marks_per_question, 2) ?></div>
        </div>
        <div class="final-score">
            FINAL SCORE: <span><?= number_format($score, 2) ?> / 200</span>
        </div>
        <div class="omr-grid">
            <?php
            $questions_per_column = 40;
            $num_columns = ceil($total_questions / $questions_per_column);
            for ($col = 0; $col < $num_columns; $col++):
            ?>
                <div class="omr-column">
                <?php
                for ($row = 0; $row < $questions_per_column; $row++):
                    $i = ($col * $questions_per_column) + $row + 1;
                    if ($i > $total_questions) break;
                    $user_ans = $user_answers[$i] ?? null;
                    $correct_ans = $correct_answers[$i];
                ?>
                    <div class="answer-block">
                        <strong>Q.&nbsp;<?= $i ?></strong>
                        <div class="bubbles">
                            <?php
                            $options = ['A', 'B', 'C', 'D', 'E'];
                            foreach ($options as $opt):
                                $class = 'bubble';
                                $content = $opt;
                                if ($user_ans && $user_ans !== 'E') {
                                    if ($user_ans == $correct_ans) {
                                        if ($opt == $user_ans) $class .= ' correct';
                                    } else {
                                        if ($opt == $user_ans) {
                                            $class .= ' incorrect';
                                            $content = '&times;';
                                        } elseif ($opt == $correct_ans) {
                                            $class .= ' missed-correct';
                                        }
                                    }
                                } else {
                                    if ($opt == 'E') $class .= ' unattempted';
                                }
                            ?>
                                <div class="<?= $class ?>"><?= $content ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</body>
</html>