<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// If logged in, display the user home page

echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</h1>";



echo '<a href="logout.php"><button>Logout</button></a>';
?>
