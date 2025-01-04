<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- Nav section  -->
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
                </div>
            </div>
        </nav>
    </div>
    
    <!-- Hero Section -->
    <header class="hero text-center text-light d-flex align-items-center justify-content-center">
        <div>
            <h1 class="display-4">Meet Our Agent</h1>
            <p class="lead">Your trusted partner for all your needs</p>
        </div>
    </header>

    <!-- Agent Details -->
    <section class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <img src="images/agent 1.jpg" alt="Agent Photo" class="img-fluid rounded-circle shadow">
            </div>
            <div class="col-md-8">
                <h2>John Doe</h2>
                <p class="text-muted">Real Estate Agent | Property Specialist</p>
                <p>
                    With over 10 years of experience in the real estate industry, John Doe has helped countless clients
                    find their dream homes and investment properties. His expertise, dedication, and friendly approach
                    make him the go-to agent for all your real estate needs.
                </p>
                <ul>
                    <li><strong>Email:</strong> john.doe@example.com</li>
                    <li><strong>Phone:</strong> +1 234-567-890</li>
                    <li><strong>Location:</strong> 123 Main Street, Springfield</li>
                </ul>
            </div>
        </div>
    </section>


<!-- footer section  -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <h4 class="footer-title">About Us</h4>
                        <p>We provide professional property management services, ensuring hassle-free management of your assets.
                        </p>
                    </div>
        
                    <!-- Quick Links -->
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
        
                    <!-- Contact Section -->
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
        
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <p>&copy; 2024 Property Manager. All rights reserved.</p>
                </div>
            </div>
        </footer>
</body>
</html>