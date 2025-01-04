<?php
session_start();
if ($_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #26011A;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #26011A;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        .dashboard {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 12px 0;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .main-content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .main-content h3 {
            color: #333;
        }
        .main-content p {
            font-size: 18px;
            color: #555;
        }
        .property-list {
            margin-top: 30px;
        }
        .property-card {
            display: flex;
            justify-content: space-between;
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .property-card h4 {
            color: #2c3e50;
        }
        .property-card p {
            font-size: 16px;
            color: #7f8c8d;
        }
        .btn {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        form {
            margin-top: 20px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }
        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }
        form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<header>
    <h1>User Dashboard</h1>
</header>

<div class="container">
    <div class="dashboard">
        <div class="sidebar">
            <h3>Welcome, <?php echo $_SESSION['user_name']; ?>!</h3>
            <a href="service.php">View Properties</a>
            <a href="my_account.php">My Account</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>

        <div class="main-content">
            <h3>Dashboard Overview</h3>
            <p>Welcome to your personal dashboard. From here, you can manage your properties, update your profile, and more!</p>

            <!-- Upload Property Form -->
            <h4>Upload a New Property</h4>
            <form action="upload_property.php" method="POST" enctype="multipart/form-data">
                <label for="title">Property Title:</label>
                <input type="text" name="title" id="title" required>

                <label for="description">Description:</label>
                <textarea name="description" id="description" required></textarea>

                <label for="price">Price:</label>
                <input type="number" name="price" id="price" step="0.01" required>

                <label for="image">Upload Image:</label>
                <input type="file" name="image" id="image" required>

                <button type="submit" name="submit">Upload Property</button>
            </form>

            <!-- List of Properties -->
            <div class="property-list">
                <h4>Your Saved Properties:</h4>
                <?php
                include 'database.php'; 
                $userId = $_SESSION['user_id'];

                $query = "SELECT * FROM properties WHERE user_id = $userId";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($property = mysqli_fetch_assoc($result)) {
                        echo "<div class='property-card'>
                                <div>
                                    <h4>" . $property['title'] . "</h4>
                                    <p>" . $property['description'] . "</p>
                                    <p>Price: $" . $property['price'] . "</p>
                                </div>
                                <a href='upload_property.php?id=" . $property['id'] . "' class='btn'>View Details</a>
                              </div>";
                    }
                } else {
                    echo "<p>No saved properties found.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
