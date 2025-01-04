<?php
session_start();
require_once 'database.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uemail = filter_var($_POST['uemail'], FILTER_SANITIZE_EMAIL);
    
    if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } else {
        $upass = $_POST['upass'];

        // Check if the email exists in the users table
        $query = "SELECT * FROM users WHERE uemail = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $uemail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($upass, $user['upass'])) {
                $_SESSION['user_id'] = $user['uid'];
                $_SESSION['user_name'] = $user['uname'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header("Location: admin_dashboard.php");
                } else {
                    header("Location: dashboard.php");
                }
                exit;
            } else {
                $message = "Invalid password.";
            }
        } else {
            $message = "User not found.";
        }

        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #26011A;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #26011A;
        }

        .login-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .login-box p {
            color: red;
            text-align: center;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .form-input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-button:hover {
            background-color: #45a049;
        }

        .login-box a {
            text-decoration: none;
            color: #4CAF50;
            text-align: center;
            display: block;
            margin-top: 10px;
        }

        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>

            <?php if (!empty($message)) { ?>
                <p><?php echo $message; ?></p>
            <?php } ?>

            <form method="POST">
                <input type="email" name="uemail" class="form-input" placeholder="Email" required>
                <input type="password" name="upass" class="form-input" placeholder="Password" required>
                <button type="submit" class="login-button">Login</button>
            </form>
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </div>
</body>
</html>
