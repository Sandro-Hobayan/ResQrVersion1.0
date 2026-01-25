<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../includes/db.php';

// Your CRUD logic for guidelines goes here...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Guidelines - Admin</title>
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
        Manage Guidelines
    </div>
</header>

<!-- Mobile menu, overlay, sidebar – copy from dashboard.php -->

<main class="admin-main">
    <h1>Manage Emergency Guidelines</h1>

    <!-- Your add/edit form + list/table here -->
    <div class="admin-card">
        <h2>Add New Guideline</h2>
        <!-- Form goes here -->
    </div>
</main>

<script src="../js/admin-script.js"></script>
</body>
</html>