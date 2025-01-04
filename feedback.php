<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $feedback = trim($_POST['feedback']);
    if (!empty($feedback)) {
        include 'database.php'; // Include your database connection file
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("INSERT INTO feedback (user_id, feedback_text) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $feedback);

        if ($stmt->execute()) {
            $success_message = "Thank you for your feedback!";
        } else {
            $error_message = "Something went wrong. Please try again.";
        }

        $stmt->close();
        $conn->close();
    } else {
        $error_message = "Feedback cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #540019;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #2c3e50;
        }

        .feedback-container {
            background-color: #540019;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 450px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feedback-container:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .feedback-container h2 {
            margin-bottom: 20px;
            font-weight: 700;
            color: #0984e3;
        }

        .feedback-container textarea {
            width: 100%;
            height: 120px;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
            font-size: 16px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }

        .feedback-container textarea:focus {
            border-color: #0984e3;
        }

        .feedback-container button {
            padding: 12px 25px;
            background: linear-gradient(135deg, #6c5ce7, #0984e3);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, box-shadow 0.3s;
        }

        .feedback-container button:hover {
            background: linear-gradient(135deg, #74b9ff, #6c5ce7);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .message {
            margin-top: 15px;
            font-size: 14px;
            color: #27ae60;
            font-weight: 500;
        }

        .error {
            margin-top: 15px;
            font-size: 14px;
            color: #e74c3c;
            font-weight: 500;
        }
    </style>
</head>
<body>
        <!-- Nav section  -->
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container">
                <!-- Left: Logo -->
                <!-- <a class="navbar-brand" href="#">
                    <img src="" alt="Logo" class="rounded-circle" style="width: 40px; height: 40px;">
                </a> -->

                <!-- Toggle Button for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Content -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- Center: Navigation Links -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agent.php">Agent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                    </ul>

                    <!-- Right: Signup and Register Buttons -->
                    <div class="d-flex ms-lg-auto mt-3 mt-lg-0">
                        <!-- <button class="btn btn-primary btn-sm me-2">Sign Up</button> -->
                        <a href="login.php">
                            <button class="btn btn-outline-light btn-sm">Login</button>
                        </a>

                    </div>
                    <br>

                </div>
            </div>
        </nav>
    </div>
    <div class="feedback-container">
        <h2>We Value Your Feedback</h2>
        <form method="POST" action="feedback.php">
            <textarea name="feedback" placeholder="Share your thoughts,property description that you want to buy and share your contact information"></textarea>
            <button type="submit">Send Feedback</button>
        </form>
        <?php
        if (isset($success_message)) {
            echo "<p class='message'>$success_message</p>";
        }
        if (isset($error_message)) {
            echo "<p class='error'>$error_message</p>";
        }
        ?>
    </div>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

