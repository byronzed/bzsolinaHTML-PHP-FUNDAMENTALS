<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function validateUser($firstName, $password) {
        return $firstName === 'user' && $password === 'pass'; // Example only
    }

    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (validateUser($firstName, $password)) {
        $_SESSION['firstName'] = $firstName;

        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}
?>
