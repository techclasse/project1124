<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin_login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $admin_username, $admin_password);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a row is returned
    if ($result->num_rows > 0) {
        // Login success
        $_SESSION['admin'] = $admin_username;
        header("Location: adminpanel.php");  // Redirect to admin dashboard
    } else {
        // Login failed
        echo "Invalid username or password.";
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>