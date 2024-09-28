<?php
include 'functions.php';

// Check if an ID was passed
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the contact
    deleteContact($id);
}

// Redirect back to the main page
header("Location: index.php");
?>
