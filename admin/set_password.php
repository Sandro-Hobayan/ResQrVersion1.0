<?php
$plain_password = 'admin';  // ← CHANGE THIS to something strong you remember
echo "Your hashed password is:\n";
echo password_hash($plain_password, PASSWORD_DEFAULT);
?>