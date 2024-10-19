<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminstyle.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    background-image: ;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Header */
.header {
    background-color: navy;
    color: white;
    padding: 15px;
    text-align: center;
    position: relative;
}

.header h2 {
    margin: 0;
    color: #f4f4f4;
}

.logout-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.logout-btn:hover {
    background-color: #c0392b;
}

/* Main Container */
.container {
    display: flex;
    flex: 1;

}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: gray;
    padding: 20px;
    min-height: 100%;
}

.sidebar ul {
    list-style-type: none;
}

.sidebar ul li {
    margin-bottom: 20px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    display: block;
    padding: 10px;
    background-color: navy;
    border-radius: 5px;
    transition: background 0.3s;
}

.sidebar ul li a:hover {
    background-color: #555;
}

/* Main Content */
.main-content {
;
    width: 100vw;
    height:100vh;
    flex-grow: 1;
    padding: 0px;
background-image:url('download.jfif') ; background-size: cover;
    margin-left: 20px;
    border-radius: 5px;
}

.main-content h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #f4f4f4;
}

.main-content p {
    font-size: 16px;
    line-height: 1.6;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px;
    background-color: navy;
    color: white;
    margin-top: auto;
}
</style>



</head>
<body>
    <div class="header">
        <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
        <a href="adminlogin.php" class="logout-btn">Logout</a>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul>
            <li><a href="usersignup.php">signup data</a></li>
                <li><a href="admin_dashboard.php">users data</a></li>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </div>

        <div class="main-content">
            
            <p></p>

            <!-- Dashboard contents go here -->
        </div>
    </div>

    <footer>
        <p></p>
    </footer>
</body>
</html>