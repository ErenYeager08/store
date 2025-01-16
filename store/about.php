<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> about - FashionHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="index.php">Fashion Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About me</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About me</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>


  <!-- Main Content -->
  <main class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1>About Us</h1>
                <p>
                    Welcome to <strong>MyStore</strong>, your number one source for all things fashion. 
                    We're dedicated to giving you the best shopping experience, focusing on quality, reliability, 
                    and customer satisfaction.
                </p>
                <p>
                    Founded in 2025, MyStore started with a simple goal: to provide stylish and affordable clothing 
                    for everyone. Our passion for fashion and customer-first approach has driven us to build a platform 
                    that’s easy to use, secure, and enjoyable.
                </p>
                <h3>Our Mission</h3>
                <p>
                    To inspire and empower individuals to express themselves through fashion while ensuring 
                    a seamless shopping experience.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500" alt="About Us Image" class="img-fluid rounded shadow-sm">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <h4>Quality Products</h4>
                <p>We handpick every item to ensure the highest quality and latest trends.</p>
            </div>
            <div class="col-md-4">
                <h4>Customer Focus</h4>
                <p>Your satisfaction is our top priority. We're here to help, always.</p>
            </div>
            <div class="col-md-4">
                <h4>Secure Shopping</h4>
                <p>Our platform is secure and easy to use, providing a hassle-free shopping experience.</p>
            </div>
        </div>
    </main>


    <?php
    include "./include/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>