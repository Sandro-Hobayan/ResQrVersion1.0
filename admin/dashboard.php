<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Barangay 176A</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-body">

<!-- Header with Hamburger -->
<header class="admin-header">
    <button class="admin-hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="logo">
        <img src="../images/caloocan_seal.png" alt="Caloocan City Seal" style="height:50px;">
        Admin Dashboard
    </div>
</header>

<!-- Mobile Slide-in Menu -->
<div class="admin-mobile-menu" id="adminMobileMenu">
    <div class="admin-mobile-header">
        <button class="admin-close-menu">&times;</button>
        <div class="logo">
            <img src="../images/caloocan_seal.png" alt="Logo" style="height:40px;">
            Admin Panel
        </div>
    </div>
    <nav class="admin-mobile-nav">
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href="manage_hotlines.php">Manage Hotlines</a>
        <a href="manage_guidelines.php">Manage Guidelines</a>
        <a href="logout.php">Logout</a>
    </nav>
</div>

<div class="admin-menu-overlay" id="adminMenuOverlay"></div>

<!-- Desktop Sidebar -->
<aside class="admin-sidebar">
    <h3>Navigation</h3>
    <a href="dashboard.php" class="active">Dashboard</a>
    <a href="manage_hotlines.php">Hotlines</a>
    <a href="manage_guidelines.php">Guidelines</a>
    <a href="logout.php">Logout</a>
</aside>

<!-- Main Content -->
<main class="admin-main">
    <h1>Welcome to the Admin Dashboard</h1>
    <p style="font-size:1.2rem; color:#555; margin-bottom:2rem;">
        Use the menu to manage emergency hotlines and safety guidelines.
    </p>

    <div class="admin-card-grid">
        <div class="admin-card">
            <i class="fas fa-phone-volume fa-3x" style="color:#c8102e; margin-bottom:1rem;"></i>
            <h2>Emergency Hotlines</h2>
            <p>Add, edit or remove contact numbers</p>
            <a href="manage_hotlines.php" class="admin-login-btn" style="display:inline-block; margin-top:1rem;">Manage Hotlines</a>
        </div>

        <div class="admin-card">
            <i class="fas fa-book fa-3x" style="color:#005566; margin-bottom:1rem;"></i>
            <h2>Safety Guidelines</h2>
            <p>Update procedures and tips for emergencies</p>
            <a href="manage_guidelines.php" class="admin-login-btn" style="display:inline-block; margin-top:1rem; background:#005566;">Manage Guidelines</a>
        </div>
    </div>
</main>

<script src="../js/admin-script.js"></script>
</body>
</html>