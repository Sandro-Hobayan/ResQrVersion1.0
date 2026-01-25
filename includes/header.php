<?php session_start(); ?>
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
    <button class="hamburger" aria-label="Open menu">
        <span></span><span></span><span></span>
    </button>

    <div class="logo">
        <img src="pictures/Caloocan_City.png" alt="" style="height:50px;">
        Barangay 176A
    </div>

    <nav class="desktop-nav">
        <a href="index.php">Home</a>
        <a href="guidelines.php">Guidelines</a>
        <a href="about.php">About</a>
        <?php if (isset($_SESSION['admin'])): ?>
            <a href="admin/dashboard.php">Admin</a>
            <a href="admin/logout.php">Logout</a>
        <?php endif; ?>
    </nav>
</header>

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
        <button class="close-menu" aria-label="Close menu">&times;</button>
        <div class="logo">
            <img src="pictures/Caloocan_City.png" alt="Barangay Logo" style="height:40px;">
            Barangay 176A
        </div>
    </div>
    <nav class="mobile-nav">
        <a href="index.php">Home</a>
        <a href="guidelines.php">Guidelines</a>
        <a href="about.php">About</a>
        <?php if (isset($_SESSION['admin'])): ?>
            <a href="admin/dashboard.php">Admin Dashboard</a>
            <a href="admin/logout.php">Logout</a>
        <?php endif; ?>
    </nav>
</div>

<div class="menu-overlay" id="menuOverlay"></div>