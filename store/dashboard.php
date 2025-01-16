<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Main Content -->
    <main class="container py-5">
        <div class="row">
            <!-- User Info -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Welcome, <?php echo $_SESSION['username'] ?></h5>
                        <p class="card-text">Email: <?php echo $_SESSION['email'] ?></p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>

            <!-- Dashboard Overview -->
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h6>Your Purchases</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP to fetch purchases -->
                                <?php
                                // Example data
                                $purchases = [
                                    ["id" => 1, "product" => "T-shirt", "quantity" => 2, "date" => "2025-01-15", "price" => "$40"],
                                    ["id" => 2, "product" => "Jeans", "quantity" => 1, "date" => "2025-01-12", "price" => "$60"],
                                ];
                                foreach ($purchases as $purchase) {
                                    echo "<tr>
                                        <td>{$purchase['id']}</td>
                                        <td>{$purchase['product']}</td>
                                        <td>{$purchase['quantity']}</td>
                                        <td>{$purchase['date']}</td>
                                        <td>{$purchase['price']}</td>
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h6>Quick Links</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="list.php" class="btn btn-outline-primary">Browse Products</a>
                            <a href="order_history.php" class="btn btn-outline-primary">Order History</a>
                            <a href="logout.php" class="btn btn-outline-danger">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include "./include/footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
