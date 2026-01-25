<?php
session_start();
include 'includes/db.php';

$page = $_GET['page'] ?? 'home';
$page = in_array($page, ['home', 'guidelines', 'about']) ? $page : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay 176A Emergency Information System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="images/caloocan_seal.png" alt="Barangay 176A" style="height:50px;">
        Barangay 176A
    </div>

    <nav class="desktop-nav">
        <a href="?page=home" class="<?= $page === 'home' ? 'active' : '' ?>">Home</a>
        <a href="?page=guidelines" class="<?= $page === 'guidelines' ? 'active' : '' ?>">Guidelines</a>
        <a href="?page=about" class="<?= $page === 'about' ? 'active' : '' ?>">About</a>
        <!-- No admin links here anymore -->
    </nav>

    <button class="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
</header>

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
        <button class="close-menu">&times;</button>
        <div class="logo">
            <img src="images/caloocan_seal.png" alt="Logo" style="height:40px;">
            Barangay 176A
        </div>
    </div>
    <nav class="mobile-nav">
        <a href="?page=home">Home</a>
        <a href="?page=guidelines">Guidelines</a>
        <a href="?page=about">About</a>
        <!-- No admin links here anymore -->
    </nav>
</div>

<div class="menu-overlay" id="menuOverlay"></div>

<main class="container">
    <?php
    switch ($page) {
        case 'guidelines':
            include 'content/guidelines.php';
            break;
        case 'about':
            include 'content/about.php';
            break;
        default:
            include 'content/home.php';
            break;
    }
    ?>
</main>

<script src="js/script.js"></script>
</body>
</html>