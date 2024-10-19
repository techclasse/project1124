<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'learning');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM signupdata";
$result = $conn->query($sql);
?>

<h1>signupdata</h1>
<table border="1">
    <tr>
        
        <th>Username</th>
        <th>Email</th>
        <th>Created At</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                
                </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found</td></tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>
