<?php
include 'functions.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Add the contact to the database
    addContact($name, $email, $phone);
}

// Redirect back to the main page
header("Location: index.php");
?>
