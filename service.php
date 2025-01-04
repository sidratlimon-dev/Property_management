<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property_management"; // Use your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch properties from the database
$query = "SELECT * FROM properties LIMIT 5";  // You can adjust the LIMIT as needed
$result = $conn->query($query);

// Fetch approved properties
$sql = "SELECT * FROM properties WHERE status = 1";
$approvedResult = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Nav section -->
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="agent.php">Agent</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                    </ul>
                    <div class="d-flex ms-lg-auto mt-3 mt-lg-0">
                        <a href="login.php"><button class="btn btn-outline-light btn-sm">Login</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <br>

    <h1>Stream Resolve Include Path</h1>
    <br>

    <section id="service" class="services-heading">
        <h2>Featured Property Service</h2>
        <p>Discover how we can simplify and elevate your property management experience.</p>
    </section>

<div class="container py-5">
    <!-- Displaying approved properties -->
    <div class="row">
        <?php 
        $counter = 0;
        while ($row = mysqli_fetch_assoc($approvedResult)) { 
            if ($counter == 3) {
                echo "</div><div class='row'>";
                $counter = 0;
            }
        ?>
            <div class="col-md-4 mb-4">
                <div class="property-card" style="background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease-in-out;">
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="property-img" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="property-info" style="padding: 15px;">
                        <h3 class="property-title" style="font-size: 1.25rem; font-weight: bold; color: #333;"><?php echo $row['title']; ?></h3>
                        <p class="property-description" style="font-size: 1rem; color: #555; margin: 10px 0;"><?php echo $row['description']; ?></p>
                        <p class="property-price" style="font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 15px;">Price: $<?php echo $row['price']; ?></p>
                    </div>
                </div>
            </div>
        <?php 
            $counter++;
        } 
        ?>
    </div>
</div>




    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <h4 class="footer-title">About Us</h4>
                    <p>We provide professional property management services, ensuring hassle-free management of your assets.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Properties</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <h4 class="footer-title">Contact Us</h4>
                    <p><i class="fas fa-phone-alt"></i> +8801994568456</p>
                    <p><i class="fas fa-envelope"></i> info@propertymanager.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Dhaka, Bangladesh</p>
                    <div class="footer-socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Property Manager. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
