<?php
// Unset all of the session variables.
unset($_SESSION['username'], $_SESSION['password']);

// destroy the session.    
session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
?>