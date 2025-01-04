<?php
include 'database.php';

if (isset($_POST['approve'])) {
    $property_id = $_POST['property_id'];

    $sql = "UPDATE properties SET status = 1 WHERE id = '$property_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Property approved successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
