<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email']) || $_SESSION['user_role'] !== 'admin') {
    // Redirect to the login page (adjust the path as needed)
    header("Location: admin_login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 80%;
    background-color: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px;
}

.container h2 {
    color: #3498db;
    font-size: 30px;
    margin-bottom: 20px;
}

a {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>

<body>
    <div class="container">
        <h2>Welcome to Admin Dashboard</h2>
        <!-- Your dashboard content goes here -->
        <a href="admin_logout.php">Logout</a>
    </div>
</body>

</html>
