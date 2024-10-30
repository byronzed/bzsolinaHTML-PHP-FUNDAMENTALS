<?php
session_start();

if (isset($_SESSION['firstName'])) {
}

$_SESSION = [];
session_destroy();

header("Location: index.php?message=" . urlencode("Successfully logged out."));
exit();
?>
