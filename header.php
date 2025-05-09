<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Insulation - Your Trusted Insulation Partner</title>
    <link rel="icon" type="image/png" href="assets/prime-insulation-logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
  .bottom-nav {
    display: none;
  }

  @media (max-width: 768px) {
    .bottom-nav {
      display: block;
    }
  }
</style>
</head>
<body>
    <header class="site-header">
        <div class="container nav-container" style="position:relative;">
            <a href="index.php" class="logo">
                <img src="assets/prime-insulation-logo.png" alt="Prime Insulation Logo" class="logo-img">
                <span>Prime Insulation</span>
            </a>
            <nav class="main-nav top-nav">
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo $currentPage === 'about.php' ? 'active' : ''; ?>">About</a></li>
                    <li><a href="products.php" class="<?php echo $currentPage === 'products.php' ? 'active' : ''; ?>">Products</a></li>
                    <li><a href="contact.php" class="<?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bottom Navigation Bar for Mobile -->
    <nav class="bottom-nav">
        <ul class="bottom-nav-list">
            <li class="bottom-nav-item">
                <a href="index.php" class="bottom-nav-link">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="bottom-nav-item">
                <a href="about.php" class="bottom-nav-link">
                    <i class="fas fa-info-circle"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="bottom-nav-item">
                <a href="products.php" class="bottom-nav-link">
                    <i class="fas fa-box"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="bottom-nav-item">
                <a href="contact.php" class="bottom-nav-link">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <!-- Your main content here -->
    </main>
</body>
</html>
