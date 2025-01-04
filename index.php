<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property management system</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
    <section class="hero">
        <div class="hero-content">
            <h1>Your Perfect Property Management Solution</h1>
            <p>Experience stress-free property ownership with our comprehensive services. Let us handle the details while
                you enjoy the results.</p>
            <!-- <div class="hero-buttons">
                <a href="#contact" class="btn-secondary">Get in Touch</a>
            </div> -->
        </div>
    </section>



    <section id="testimonials" class="bg-red text-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <p class="text-center mb-5">Hear from property owners and tenants who have experienced our exceptional services.</p>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="testimonial text-center">
                    <p class="testimonial-text">"Thanks to this team, managing my rental properties has been stress-free and profitable. Highly recommend!"</p>
                    <h5 class="testimonial-author">- John D.</h5>
                    <p class="testimonial-role">Property Owner</p>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="testimonial text-center">
                    <p class="testimonial-text">"I’ve never had such responsive and efficient property managers. They truly care about tenants' comfort."</p>
                    <h5 class="testimonial-author">- Sarah K.</h5>
                    <p class="testimonial-role">Tenant</p>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="testimonial text-center">
                    <p class="testimonial-text">"Their professionalism and attention to detail have exceeded my expectations. Outstanding service!"</p>
                    <h5 class="testimonial-author">- Amanda T.</h5>
                    <p class="testimonial-role">Investor</p>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
    .about-us {
        padding: 3rem 1.5rem;
        background: linear-gradient(148deg, #26011A 0%, #540019 100%);
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .about-us::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
        opacity: 0.15;
        z-index: 0;
    }

    .about-us .container {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: auto;
    }

    .about-us h2 {
        font-size: 2.5rem;
        font-family: 'Playfair Display', serif;
        color: #004d40;
        margin-bottom: 1rem;
    }

    .about-us p {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 2rem;
    }

    .about-us .company-name {
        font-weight: bold;
        color: #00796b;
    }

    .about-us .cta-btn {
        display: inline-block;
        padding: 0.75rem 2rem;
        background: #00796b;
        color: #fff;
        font-size: 1rem;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .about-us .cta-btn:hover {
        background: #004d40;
    }
</style>

<section class="benefits">
    <div class="container">
        <h2>Why Choose Us</h2>
        <ul>
            <li>
                <div class="icon">💰</div>
                <strong>Maximized Rental Income:</strong> Strategic pricing and efficient rent collection.
            </li>
            <li>
                <div class="icon">⏰</div>
                <strong>Time Savings:</strong> Handle all property-related tasks so you don’t have to.
            </li>
            <li>
                <div class="icon">📈</div>
                <strong>Expert Marketing:</strong> Attract high-quality tenants quickly.
            </li>
            <li>
                <div class="icon">📞</div>
                <strong>24/7 Support:</strong> Always available for emergencies and inquiries.
            </li>
        </ul>
    </div>
</section>

<style>
    /* Benefits Section */
    .benefits {
        padding: 3rem 1rem;
        background: linear-gradient(148deg, #26011A 0%, #540019 100%);
        text-align: center;
        font-family: Arial, sans-serif;
        border-radius: 10px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .benefits h2 {
        font-size: 2.5rem;
        margin-bottom: 2rem;
        color: #4a4a4a;
        text-transform: uppercase;
        position: relative;
        letter-spacing: 1px;
    }

    .benefits h2::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #4a90e2;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    .benefits ul {
        list-style: none;
        padding: 0;
        max-width: 800px;
        margin: 0 auto;
        text-align: left;
    }

    .benefits ul li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .benefits ul li .icon {
        font-size: 2rem;
        color: #4a90e2;
        margin-right: 1rem;
    }

    .benefits ul li strong {
        font-size: 1.2rem;
        color: #333;
    }

    .benefits ul li {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .benefits h2 {
            font-size: 2rem;
        }

        .benefits ul li {
            flex-direction: column;
            align-items: flex-start;
        }

        .benefits ul li .icon {
            margin-bottom: 0.5rem;
        }
    }
</style>

<section class="faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <details>
            <summary>How do you screen tenants?</summary>
            <p>We use background checks, credit scores, and references to ensure quality tenants.</p>
        </details>
        <details>
            <summary>What are your fees?</summary>
            <p>Our fees vary depending on the service package. Contact us for a detailed quote.</p>
        </details>
        <details>
            <summary>What is your property inspection process?</summary>
            <p>We conduct regular inspections to ensure properties are well-maintained and meet our standards.</p>
        </details>
    </div>
</section>

<style>
    /* FAQ Section */
    .faq {
        padding: 3rem 1rem;
        background: linear-gradient(148deg, #26011A 0%, #540019 100%);
        color: #333;
        font-family: Arial, sans-serif;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .faq h2 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #007bff;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
    }

    .faq h2::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #007bff;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    .faq details {
        margin: 1.5rem auto;
        max-width: 600px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: white;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    details[open] {
        border-color: #007bff;
    }

    details summary {
        padding: 1rem;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        background: #f4f4f4;
        border-bottom: 1px solid #ddd;
        color: #007bff;
        transition: all 0.3s ease;
    }

    details[open] summary {
        background: #e7f1fc;
        color: #0056b3;
    }

    details p {
        padding: 1rem;
        font-size: 1rem;
        color: #555;
        background: white;
    }

    details summary:hover {
        color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .faq h2 {
            font-size: 2rem;
        }

        details summary {
            font-size: 1.1rem;
        }
    }
</style>


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