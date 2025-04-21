<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Communication Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CableComm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white text-center p-5">
        <div class="container">
            <h1>Reliable Cable Communication Services</h1>
            <p class="lead">Experience the best in TV, Internet, and Phone Services</p>
            <a href="#plans" class="btn btn-light">Explore Plans</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <i class="bi bi-tv display-4 text-primary"></i>
                    <h3 class="mt-3">Cable TV</h3>
                    <p>Enjoy over 200 channels with HD quality.</p>
                </div>
                <div class="col-lg-4">
                    <i class="bi bi-router display-4 text-primary"></i>
                    <h3 class="mt-3">High-Speed Internet</h3>
                    <p>Blazing fast internet for all your needs.</p>
                </div>
                <div class="col-lg-4">
                    <i class="bi bi-telephone-fill display-4 text-primary"></i>
                    <h3 class="mt-3">Phone Services</h3>
                    <p>Crystal clear calling at unbeatable rates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section id="plans" class="bg-light p-5">
        <div class="container">
            <h2 class="text-center">Our Plans</h2>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="card p-3">
                        <h3>Basic</h3>
                        <p>$29.99/month</p>
                        <ul class="list-unstyled">
                            <li>100+ TV Channels</li>
                            <li>50 Mbps Internet</li>
                            <li>Unlimited Phone Calls</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3">
                        <h3>Standard</h3>
                        <p>$59.99/month</p>
                        <ul class="list-unstyled">
                            <li>200+ TV Channels</li>
                            <li>150 Mbps Internet</li>
                            <li>Unlimited Phone Calls</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3">
                        <h3>Premium</h3>
                        <p>$99.99/month</p>
                        <ul class="list-unstyled">
                            <li>300+ TV Channels</li>
                            <li>500 Mbps Internet</li>
                            <li>Unlimited Phone Calls</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="p-5">
        <div class="container">
            <h2 class="text-center">What Our Customers Say</h2>
            <div class="row">
                <div class="col-lg-6">
                    <blockquote class="blockquote">
                        <p>"The best service I have ever used. Fast internet and great TV channels."</p>
                        <footer class="blockquote-footer">John Doe</footer>
                    </blockquote>
                </div>
                <div class="col-lg-6">
                    <blockquote class="blockquote">
                        <p>"Amazing customer support and affordable plans. Highly recommend!"</p>
                        <footer class="blockquote-footer">Jane Smith</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-dark text-white p-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <form class="mt-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center p-3 bg-primary text-white">
        <div class="container">
            <p>&copy; 2024 CableComm. All Rights Reserved.</p>
            
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("website.php");
?>