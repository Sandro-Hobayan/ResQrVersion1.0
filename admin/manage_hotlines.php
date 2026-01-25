<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../includes/db.php';

// Your existing CRUD logic here (add/update/delete hotlines)...
// Example placeholder content:
$hotlines = $pdo->query("SELECT * FROM hotlines ORDER BY name")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Hotlines - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-body">

<header class="admin-header">
    <button class="admin-hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
    <div class="logo">
        <img src="../images/caloocan_seal.png" alt="Logo" style="height:50px;">
        Manage Hotlines
    </div>
</header>

<div class="admin-mobile-menu" id="adminMobileMenu">
    <!-- same mobile menu HTML as in dashboard.php -->
    <nav class="admin-mobile-nav">
        <a href="../admin/dashboard.php">Dashboard</a>
        <a href="manage_hotlines.php" class="active">Hotlines</a>
        <a href="manage_guidelines.php">Guidelines</a>
        <a href="../admin/logout.php">Logout</a>
    </nav>
</div>

<div class="admin-menu-overlay" id="adminMenuOverlay"></div>

<aside class="admin-sidebar">
    <h3>Navigation</h3>
    <a href="../admin/dashboard.php">Dashboard</a>
    <a href="manage_hotlines.php" class="active">Hotlines</a>
    <a href="manage_guidelines.php">Guidelines</a>
    <a href="../admin/logout.php">Logout</a>
</aside>

<main class="admin-main">
    <h1>Manage Emergency Hotlines</h1>

    <!-- Your form and table here – example placeholder -->
    <div class="admin-card">
        <h2>Add New Hotline</h2>
        <!-- Add your form fields -->
    </div>

    <div class="admin-card" style="margin-top:2rem;">
        <h2>Current Hotlines</h2>
        <!-- Your table or list here -->
        <p>List of hotlines will appear here...</p>
    </div>
</main>

<script src="../js/admin-script.js"></script>
</body>
</html>