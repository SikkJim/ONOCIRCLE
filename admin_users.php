<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    // Redirect to login page or an unauthorized access page
    header('Location: login.html?error=unauthorized');
    exit();
}
// If execution reaches here, the user is an authenticated admin.
// You can now proceed to render the admin page HTML.
?>