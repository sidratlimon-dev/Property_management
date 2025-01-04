<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

include 'database.php';

// Fetch Feedback Data
$feedbackResult = $conn->query("SELECT feedback.id, users.uname, feedback.feedback_text, feedback.created_at 
                                FROM feedback 
                                JOIN users ON feedback.user_id = users.uid 
                                ORDER BY feedback.created_at DESC");

// Fetch Pending Properties
$pendingPropertiesResult = $conn->query("SELECT * FROM properties WHERE status = 0");

// Fetch Registered Users
$usersResult = $conn->query("SELECT uid, uname, uemail, role FROM users WHERE role = 'user'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #26011A;
            color: #333;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar a {
            color: #ecf0f1;
            display: block;
            padding: 15px 25px;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid #34495e;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2980b9;
            padding: 20px;
            color: white;
        }

        .header h2 {
            font-size: 28px;
        }

        .header a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 8px 15px;
            background-color: #e74c3c;
            border-radius: 5px;
        }

        .table-container {
            margin-top: 40px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2980b9;
            color: white;
        }

        img {
            max-width: 100px;
        }

        button {
            padding: 8px 12px;
            margin: 0 5px;
            border: none;
            color: white;
            background-color: #2980b9;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1b4d75;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 style="color: white; text-align: center; margin-bottom: 20px;">Admin</h2>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h2>Welcome, Admin</h2>
            <a href="logout.php">Logout</a>
        </div>

        <!-- User Feedback Section -->
        <div id="feedback" class="table-container">
            <h3>User Feedback</h3>
            <table>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Feedback</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $feedbackResult->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['uname']); ?></td>
                            <td><?php echo htmlspecialchars($row['feedback_text']); ?></td>
                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Pending Properties Section -->
        <div id="pending-properties" class="table-container">
            <h3>Pending Properties</h3>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $pendingPropertiesResult->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><?php echo htmlspecialchars($row['price']); ?></td>
                            <td><img src="images/<?php echo htmlspecialchars($row['image']); ?>" /></td>
                            <td>
                                <form action="approve_property.php" method="POST" style="display:inline-block;">
                                    <input type="hidden" name="property_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="approve">Approve</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- View Users Section -->
        <div id="users" class="table-container">
            <h3>Registered Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Registered At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $usersResult->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['uid']); ?></td>
                            <td><?php echo htmlspecialchars($row['uname']); ?></td>
                            <td><?php echo htmlspecialchars($row['uemail']); ?></td>
                            <td><?php echo htmlspecialchars($row['role']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
