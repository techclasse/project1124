<?php
include 'connection.php'; // Include your database connection

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable error reporting

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bio = $_POST['bio'];

    // Check if a CV file has been uploaded
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $cvFile = $_FILES['cv'];

        // Validate file type (optional)
        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($cvFile['type'], $allowedTypes)) {
            die("Error: Invalid file type.");
        }

        // Define a target directory and ensure it exists
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Create the directory if it doesn't exist
        }

        // Define the target file path
        $targetFile = $uploadDir . basename($cvFile['name']);

        // Move the uploaded file
        if (move_uploaded_file($cvFile['tmp_name'], $targetFile)) {
            // File upload successful, now insert the data into the database
            $stmt = $conn->prepare("INSERT INTO collectdata (name, email, age, gender, bio, cv) VALUES (?, ?, ?, ?, ?, ?)");
            if (!$stmt) {
                die("Error preparing statement: " . $conn->error);
            }
            $stmt->bind_param("ssssss", $name, $email, $age, $gender, $bio, $targetFile); // Use $targetFile for CV path

            if ($stmt->execute()) {
                echo "Data collected successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: Could not move the uploaded file.";
        }
    } else {
        echo "Error: " . ($_FILES['cv']['error'] ?? 'No file uploaded.');
    }

    $conn->close();
}
?>
