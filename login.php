<?php
session_start();
require 'connection.php'; // Include your database connection file

// Clear previous error message
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']); // Password input from the user

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT password FROM signupdata WHERE username = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error); // Check for preparation error
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password against the hash
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $username;

            // Redirect to dashboard
            header("Location: collect.html");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();

// Display error if exists
if (!empty($error)) {
    echo "<div style='color: red;'>$error</div>";
}
