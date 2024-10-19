<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CV</title>
</head>
<body>
    <h1>Upload CV</h1>
    <form action="processcollect.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <label for="bio">Bio:</label>
        <textarea name="bio" required></textarea><br>

        <label for="cv">Upload CV:</label>
        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required><br>

        <input type="submit" value="Upload CV">
    </form>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
