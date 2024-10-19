<?php
// hash_password.php

// Replace 'your_password_here' with your desired password
$plaintext_password = '12345';
$hashed_password = password_hash($plaintext_password, PASSWORD_BCRYPT);

echo "Hashed Password: " . $hashed_password;
?>