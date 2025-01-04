<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Property Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f7f9fc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .about-header {
            background: #540019;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .about-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .about-header p {
            font-size: 1.2rem;
            font-weight: 400;
        }

        .about-section {
            padding: 60px 20px;
        }

        .about-section h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #0984e3;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
            justify-content: space-between;
        }

        .about-image {
            flex: 1 1 40%;
        }

        .about-image img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            flex: 1 1 55%;
        }

        .about-text p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .highlights {
            margin-top: 40px;
        }

        .highlights ul {
            list-style: none;
            padding: 0;
        }

        .highlights ul li {
            font-size: 1rem;
            margin-bottom: 10px;
            padding-left: 30px;
            position: relative;
        }

        .highlights ul li::before {
            content: '\2713';
            color: #0984e3;
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .cta-section {
            text-align: center;
            padding: 40px 20px;
            background: #0984e3;
            color: white;
            margin-top: 50px;
            border-radius: 12px;
        }

        .cta-section h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .cta-section a {
            background: #6c5ce7;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .cta-section a:hover {
            background: #4b4dda;
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
                    <div class="d-flex ms-lg-auto mt-3 mt-lg-0">
                        <!-- <button class="btn btn-primary btn-sm me-2">Sign Up</button> -->
                        <a href="register.php">
                            <button class="btn btn-outline-light btn-sm">Register</button>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
<!-- About Header -->
<div class="about-header">
    <h1>About Us</h1>
    <p>Dedicated to providing exceptional property management services for a hassle-free experience.</p>
</div>

<!-- About Section -->
<div class="container about-section">
    <div class="about-content">
        <div class="about-image">
            <img src="images/house 1.jpg" alt="Property Management">
        </div>
        <div class="about-text">
            <p>At Property Manager, we pride ourselves on offering comprehensive property management solutions that simplify your life. From tenant management to maintenance, our experienced team is here to handle all aspects of property care.</p>
            <p>With years of experience in the industry, we understand the unique challenges property owners face and strive to deliver tailored solutions to meet your needs. Our commitment to transparency, reliability, and excellence ensures peace of mind for our clients.</p>

            <div class="highlights">
                <h4>Why Choose Us?</h4>
                <ul>
                    <li>Professional and reliable services</li>
                    <li>Experienced team with a client-first approach</li>
                    <li>Comprehensive property management solutions</li>
                    <li>24/7 support and maintenance</li>
                </ul>
            </div>
        </div>
    </div>
</div>
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





    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
