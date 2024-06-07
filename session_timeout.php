<?php
session_start();

// Set timeout duration in seconds (e.g., 900 seconds = 15 minutes)
$timeout_duration = 900;

// Check if the user is logged in
if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];
    
    if ($elapsed_time >= $timeout_duration) {
        session_unset();     // Unset session variables
        session_destroy();   // Destroy the session
        header("Location: login.php?message=Session expired, please log in again.");
        exit();
    }
}

// Update last activity time stamp
$_SESSION['last_activity'] = time();
?>