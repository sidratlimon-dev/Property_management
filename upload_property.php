<?php
session_start();
if ($_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit;
}

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $propertyName = mysqli_real_escape_string($conn, $_POST['title']); // Title of the property
    $propertyDescription = mysqli_real_escape_string($conn, $_POST['description']); // Description of the property
    $price = mysqli_real_escape_string($conn, $_POST['price']); // Price of the property
    
    // Handle image upload
    $imagePath = null;
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "images/"; // Directory where images are stored
        $imageName = basename($_FILES['image']['name']); // Get the image name
        $targetFile = $targetDir . time() . "_" . $imageName; // Generate a unique file name
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile; // Set the image path for the database
        }
    }

    // Insert property data into the database
    $query = "INSERT INTO properties (user_id, title, description, image, price) 
              VALUES ('$userId', '$propertyName', '$propertyDescription', '$imagePath', '$price')";
    if (mysqli_query($conn, $query)) {
        echo "Property uploaded successfully!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
