<?php
session_start(); // Resume the session

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: newlog.php");
    exit();
} else {
    // If the user is not logged in, simply redirect to the login page
    header("Location: newlog.php");
    exit();
}
?>
