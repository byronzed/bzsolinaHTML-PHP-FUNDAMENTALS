<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1, h2 { color: #333; }
        form { max-width: 300px; margin-top: 20px; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;
        }
        input[type="submit"] { background-color: #28a745; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #218838; }
        .message { color: red; margin-bottom: 20px; }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['firstName'])) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['firstName']) . "! You are already logged in.</h2>";
        echo '<a href="unset.php">Logout</a>';
        exit(); // Prevent the form from being shown
    }

    if (isset($_GET['error'])) {
        echo '<div class="message">' . htmlspecialchars($_GET['error']) . '</div>';
    }
    ?>

    <h1>Please Log In</h1>

    <form action="handleForm.php" method="POST">
        <p><input type="text" placeholder="First name" name="firstName" required></p>
        <p><input type="password" placeholder="Password" name="password" required></p>
        <p><input type="submit" value="Submit" name="submitBtn"></p>
    </form>
</body>
</html>
