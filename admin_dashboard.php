<?php
include 'connection.php'; // Include your database connection

// Fetch all records from the adminlogin table
$result = $conn->query("SELECT * FROM signupdata");
$result = $conn->query("SELECT * FROM collectdata");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href=".css"> <!-- Optional CSS file -->
    <style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    padding: 20px;
}

/* Header Styles */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: navy;
    color: white;
}

/* Link Styles */
a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Button Styles */
input[type="submit"] {
    background-color: #dc3545; /* Red */
    color: white;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #c82333; /* Darker Red */
}

/* Responsive Styles */
@media (max-width: 768px) {
    body {
        padding: 10px;
    }

    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }

    input[type="submit"] {
        padding: 6px 10px;
    }
}
</style>

</head>
<body>
    <a href="adminpanel.php">Home</a>

    
    







    <h2>User data collection</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Bio</th>
            <th>CV</th>
        
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['age']); ?></td>
            <td><?php echo htmlspecialchars($row['gender']); ?></td>
            <td><?php echo htmlspecialchars($row['bio']); ?></td>
            <td><a href="<?php echo htmlspecialchars($row['cv']); ?>" target="_blank">View CV</a></td>
            <td>
                
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="upload_cv.php">Upload New CV</a>
</body>
</html>

<?php
$conn->close();
?>
