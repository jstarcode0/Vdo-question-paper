<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDO Recruitment Exam - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { background: rgba(255, 255, 255, 0.95); padding: 50px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); text-align: center; width: 100%; max-width: 450px; backdrop-filter: blur(10px); }
        h1 { margin-top: 0; color: #333; font-weight: 700; font-size: 28px; }
        p { color: #555; margin-bottom: 30px; }
        .form-group { margin-bottom: 25px; text-align: left; }
        .form-group label { display: block; margin-bottom: 10px; font-weight: 600; color: #444; }
        .form-group input { width: 100%; padding: 14px; border: 1px solid #ccc; border-radius: 10px; box-sizing: border-box; font-size: 16px; transition: border-color 0.3s, box-shadow 0.3s; }
        .form-group input:focus { border-color: #667eea; box-shadow: 0 0 8px rgba(102, 126, 234, 0.4); outline: none; }
        .submit-btn { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 16px 20px; border-radius: 10px; font-size: 18px; font-weight: 600; cursor: pointer; width: 100%; transition: transform 0.2s; }
        .submit-btn:hover { transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Rajasthan VDO Mock Test 2025</h1>
        <p>Enter your details to begin the examination.</p>
        <form action="test.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="e.g., Jane Doe">
            </div>
            <div class="form-group">
                <label for="rollnumber">Roll Number</label>
                <input type="text" id="rollnumber" name="rollnumber" required placeholder="e.g., K23L18790695">
            </div>
            <button type="submit" class="submit-btn">Start Test</button>
        </form>
    </div>
</body>
</html>