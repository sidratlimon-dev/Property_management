<?php
session_start();
require_once 'database.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
    $uemail = filter_var($_POST['uemail'], FILTER_SANITIZE_EMAIL);
    $upass = $_POST['upass'];
    $role = $_POST['role']; // 'user' or 'admin'

    if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } else {
        // Hash the password
        $hashed_password = password_hash($upass, PASSWORD_DEFAULT);

        // Insert into the users table with role distinction
        $query = "INSERT INTO users (uname, uemail, upass, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $uname, $uemail, $hashed_password, $role);

        // Execute and check if registration is successful
        if ($stmt->execute()) {
            $message = "Registration successful.";
        } else {
            $message = "Registration failed. Please try again.";
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
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7fc;
        }

        .register-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register-box h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .register-box p {
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

        .register-button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .register-button:hover {
            background-color: #45a049;
        }

        .register-box a {
            text-decoration: none;
            color: #4CAF50;
            text-align: center;
            display: block;
            margin-top: 10px;
        }

        .register-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Register</h2>

            <?php if (!empty($message)) { ?>
                <p><?php echo $message; ?></p>
            <?php } ?>

            <form method="POST">
                <input type="text" name="uname" class="form-input" placeholder="Username" required>
                <input type="email" name="uemail" class="form-input" placeholder="Email" required>
                <input type="password" name="upass" class="form-input" placeholder="Password" required>
                <select name="role" class="form-input">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" class="register-button">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
