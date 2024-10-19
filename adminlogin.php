


<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
<link rel="stylesheet" href="login.css">



<style>

    /* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: whitesmoke;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h2 {
    text-align: center;
    color: white;
}

/* Login form container */
form {
background-color: navy;    
    
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    box-sizing: border-box;
}

/* Input fields */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

/* Submit button */
input[type="submit"] {
    width: 100%;
    background-color: gold;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color:navy;
}

/* Form labels */
label {
    font-size: 20px;
    color: white;
}

/* Add some responsiveness */
@media screen and (max-width: 400px) {
    form {
        width: 100%;
        padding: 20px;
    }
}
</style>

</head>
<body>
   
    <form action="adminloginprocess.php" method="post">
    <h2>Admin Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>