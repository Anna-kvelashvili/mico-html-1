 <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #00c6a9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            color: white;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        button {
            background-color: #fff;
            color: #00c6a9;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #00b89c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
