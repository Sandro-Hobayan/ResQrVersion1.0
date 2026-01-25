<?php
session_start();

// Replace with your actual hash
$stored_hash = '$2y$10$g5UO5z8YpMrSTnJNtg3mg.wwIzwVt7RnnQQZMxskdrGHkWaW0d/Wa';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && password_verify($password, $stored_hash)) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Barangay 176A</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="admin-login">

<div class="admin-login-container">
    <div class="admin-login-logo">
        <img src="../images/caloocan_seal.png" alt="logo">
    </div>

    <h1 class="admin-login-title">Admin Login</h1>
    <p class="admin-login-subtitle">Barangay 176A Emergency Information System</p>

    <?php if (isset($error)): ?>
        <p class="admin-login-error"><?= $error ?></p>
    <?php endif; ?>

    <form method="post" class="admin-login-form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autofocus placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
        </div>

        <button type="submit" class="admin-login-btn">Login</button>
    </form>
</div>

</body>
</html>