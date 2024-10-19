<?php
include 'connection.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Fetch the CV path from the database
    $stmt = $conn->prepare("SELECT cv FROM collectdata WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cvPath = $row['cv'];
        
        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM collectdata WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            // Delete the file from the server
            if (file_exists($cvPath)) {
                unlink($cvPath); // Remove the file
            }
            echo "CV deleted successfully!";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "CV not found.";
    }
}

$conn->close();
?>
