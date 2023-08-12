<!-- student id - 200544014
name - aryan
file contains ---logout logic -->

<?php
// Include header file
require 'header.php';

// Start session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to index.php
header('location:index.php');

// Include footer file
require 'footer.php';
?>
