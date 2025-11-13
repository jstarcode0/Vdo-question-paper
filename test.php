<?php
session_start();
require_once 'questions.php';

// --- This PHP block now only sets up the initial page state ---

// Start a fresh test session on login
if (isset($_POST['name']) && isset($_POST['rollnumber'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['rollnumber'] = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['rollnumber']);
    $_SESSION['user_answers'] = []; 
}

// Security check: if no roll number, redirect to login
if (!isset($_SESSION['rollnumber'])) {
    header('Location: index.php');
    exit();
}

$all_questions = get_questions();
$total_questions = count($all_questions);
$user_answers = $_SESSION['user_answers'] ?? [];

// Initial question number is always 1, JavaScript will handle the rest.
$initial_q_num = 1;
$initial_lang = 'en';
$initial_question = $all_questions[$initial_q_num][$initial_lang];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDO Mock Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* --- Base and Desktop Styles --- */
        :root {
            --primary-color: #007bff;
            --light-gray: #f0f4f9;
            --white: #fff;
            --dark-text: #343a40;
            --medium-text: #666;
            --border-color: #dee2e6;
        }
        
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: var(--light-gray); 
            margin: 0; 
            box-sizing: border-box;
        }

        .test-wrapper { 
            padding: 20px 15px; /* Added horizontal padding for mobile */
            max-width: 900px; 
            margin: 0 auto; 
        }

        .sidebar { 
            height: 100%; 
            width: 280px; 
            position: fixed; 
            z-index: 1000; 
            top: 0; 
            left: 0; 
            background-color: var(--white); 
            overflow-y: auto; 
            transition: transform 0.3s ease-in-out; 
            box-shadow: 3px 0 15px rgba(0,0,0,0.1); 
            transform: translateX(-100%); 
        }
        .sidebar.open { transform: translateX(0); }
        .sidebar-header { padding: 15px 20px; border-bottom: 1px solid #eee; }
        .sidebar-header h3 { margin: 0 0 5px 0; font-size: 18px; }
        .sidebar-header p { margin: 0; color: var(--medium-text); font-size: 14px; word-break: break-all; }
        
        .palette { display: flex; flex-wrap: wrap; gap: 8px; padding: 15px; }
        .palette-item { width: 35px; height: 35px; text-decoration: none; color: #333; background: var(--light-gray); border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 500; transition: all 0.2s; cursor: pointer; }
        .palette-item:hover { background: #dbe4f0; }
        .palette-item.answered { background: #d4edda; color: #155724; border-color: #c3e6cb; }
        .palette-item.current { background: var(--primary-color); color: var(--white); border-color: var(--primary-color); transform: scale(1.1); }
        
        .menu-toggle { position: fixed; top: 15px; left: 15px; z-index: 1001; background: var(--white); border: none; padding: 10px; border-radius: 8px; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.1); transition: left 0.3s ease-in-out; }
        
        .question-box { background: var(--white); padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-top: 60px; }
        .q-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; border-bottom: 1px solid #eee; padding-bottom: 15px; }
        .q-title { font-size: 18px; font-weight: 600; color: var(--dark-text); }
        .lang-btn { font-size: 13px; text-decoration: none; color: var(--primary-color); background: #e7f3ff; padding: 8px 12px; border-radius: 8px; font-weight: 500; cursor: pointer; white-space: nowrap; }
        .q-text { font-size: 17px; line-height: 1.7; margin-bottom: 30px; min-height: 50px; }
        
        .options-container button { display: block; width: 100%; text-align: left; background: #f8f9fa; border: 2px solid var(--border-color); border-radius: 10px; padding: 15px; margin-bottom: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s; font-family: inherit; }
        .options-container button:hover { border-color: var(--primary-color); background: #e7f3ff; }
        .options-container button.selected { border-color: var(--primary-color); background: var(--primary-color); color: var(--white); font-weight: 600; }
        
        .navigation { display: flex; justify-content: space-between; margin-top: 30px; }
        .nav-btn, .submit-btn { text-decoration: none; color: var(--white); padding: 12px 25px; border-radius: 8px; font-weight: 500; transition: background 0.3s, transform 0.2s; border: none; font-size: 16px; cursor: pointer; }
        .nav-btn:hover, .submit-btn:hover { transform: translateY(-2px); }
        .prev-btn { background: #6c757d; }
        .next-btn { background: var(--primary-color); }
        .submit-btn { background: #28a745; }

        /* --- THIS IS THE NEW RESPONSIVE CSS --- */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%; /* Full width sidebar on mobile */
            }
            .question-box {
                padding: 20px;
                margin-top: 70px; /* More space for the fixed button */
            }
            .q-title {
                font-size: 16px;
            }
            .q-text {
                font-size: 16px;
            }
            .options-container button {
                padding: 12px;
                font-size: 15px;
            }
            .nav-btn, .submit-btn {
                padding: 10px 20px;
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <div id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <h3><?= htmlspecialchars($_SESSION['name']) ?></h3>
            <p>Roll: <?= htmlspecialchars($_SESSION['rollnumber']) ?></p>
        </div>
        <div class="palette" id="question-palette">
            <?php for ($i = 1; $i <= $total_questions; $i++): ?>
                <a data-qnum="<?= $i ?>" class="palette-item <?= ($i == $initial_q_num) ? 'current' : '' ?> <?= (isset($user_answers[$i])) ? 'answered' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>
    </div>

    <button id="menu-toggle-btn" class="menu-toggle" onclick="toggleMenu()">☰</button>
    
    <div class="test-wrapper">
        <div class="question-box">
             <div class="q-header">
                <span class="q-title" id="q-title"></span>
                <a class="lang-btn" id="lang-btn"></a>
            </div>
            <p class="q-text" id="q-text"></p>
            
            <div class="options-container" id="options-container"></div>
            
            <div class="navigation">
                <a id="prev-btn" class="nav-btn prev-btn" style="visibility: hidden;">Previous</a>
                <a id="next-btn" class="nav-btn next-btn">Save & Next</a>
                <a id="finish-btn" href="result.php" class="submit-btn" style="display: none;">Finish & View Result</a>
            </div>
        </div>
    </div>

    <script>
        // All JavaScript is unchanged and correct
        let currentQNum = <?= $initial_q_num ?>;
        let currentLang = '<?= $initial_lang ?>';
        const totalQuestions = <?= $total_questions ?>;
        let userAnswers = <?= json_encode($user_answers) ?>;

        const qTitle = document.getElementById('q-title');
        const qText = document.getElementById('q-text');
        const optionsContainer = document.getElementById('options-container');
        const langBtn = document.getElementById('lang-btn');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const finishBtn = document.getElementById('finish-btn');
        const palette = document.getElementById('question-palette');

        async function fetchQuestion(qNum, lang) {
            const response = await fetch('api.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'get_question', q_num: qNum, lang: lang })
            });
            const data = await response.json();
            if (data.success) {
                updateUI(data.question);
            }
        }

        async function saveAnswer(qNum, answer) {
            userAnswers[qNum] = answer;
            palette.querySelector(`[data-qnum="${qNum}"]`).classList.add('answered');
            await fetch('api.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'save_answer', q_num: qNum, answer: answer })
            });
        }

        function updateUI(questionData) {
            document.body.style.fontFamily = currentLang === 'hi' ? "'Noto Sans', sans-serif" : "'Poppins', sans-serif";
            
            qTitle.innerText = `${currentLang === 'hi' ? 'प्रश्न' : 'Question'} ${currentQNum} / ${totalQuestions}`;
            qText.innerText = questionData.question;

            optionsContainer.innerHTML = '';
            const optionsMap = ['A', 'B', 'C', 'D', 'E'];
            questionData.options.forEach((option, index) => {
                const optionValue = optionsMap[index];
                const button = document.createElement('button');
                button.innerHTML = `(${optionValue}) ${option}`;
                button.dataset.value = optionValue;
                if (userAnswers[currentQNum] === optionValue) {
                    button.classList.add('selected');
                }
                optionsContainer.appendChild(button);
            });

            langBtn.innerText = currentLang === 'en' ? 'Switch to Hindi' : 'अंग्रेजी में बदलें';
            
            prevBtn.style.visibility = currentQNum > 1 ? 'visible' : 'hidden';
            nextBtn.style.display = currentQNum < totalQuestions ? 'block' : 'none';
            finishBtn.style.display = currentQNum === totalQuestions ? 'block' : 'none';
            
            const currentActive = palette.querySelector('.current');
            if (currentActive) currentActive.classList.remove('current');
            palette.querySelector(`[data-qnum="${currentQNum}"]`).classList.add('current');
        }

        optionsContainer.addEventListener('click', async (e) => {
            if (e.target.tagName === 'BUTTON') {
                const selectedAnswer = e.target.dataset.value;
                await saveAnswer(currentQNum, selectedAnswer);
                
                const buttons = optionsContainer.querySelectorAll('button');
                buttons.forEach(btn => btn.classList.remove('selected'));
                e.target.classList.add('selected');
            }
        });

        langBtn.addEventListener('click', () => {
            currentLang = currentLang === 'en' ? 'hi' : 'en';
            fetchQuestion(currentQNum, currentLang);
        });

        nextBtn.addEventListener('click', () => {
            if (currentQNum < totalQuestions) {
                currentQNum++;
                fetchQuestion(currentQNum, currentLang);
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentQNum > 1) {
                currentQNum--;
                fetchQuestion(currentQNum, currentLang);
            }
        });

        palette.addEventListener('click', (e) => {
            if (e.target.classList.contains('palette-item')) {
                const qNum = parseInt(e.target.dataset.qnum, 10);
                if (qNum !== currentQNum) {
                    currentQNum = qNum;
                    fetchQuestion(currentQNum, currentLang);
                }
            }
        });

        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('menu-toggle-btn');
            sidebar.classList.toggle('open');

            // --- NEW LOGIC FOR MOBILE SIDEBAR BUTTON ---
            const isMobile = window.innerWidth <= 768;
            if (isMobile) {
                // On mobile, the button always stays in the top-left corner
                toggleBtn.style.left = '15px'; 
            } else {
                // On desktop, the button moves with the sidebar
                toggleBtn.style.left = sidebar.classList.contains('open') ? '300px' : '15px';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const initialQuestionData = {
                question: `<?= addslashes($initial_question['question']) ?>`,
                options: <?= json_encode($initial_question['options']) ?>
            };
            updateUI(initialQuestionData);
        });

    </script>
</body>
</html>