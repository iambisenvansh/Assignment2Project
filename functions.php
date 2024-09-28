<?php

function connectDB() {
    $conn = new mysqli('localhost', 'root', '1234', 'contact_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


function getContacts() {
    $conn = connectDB();
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function addContact($name, $email, $phone) {
    $conn = connectDB();
    $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
    $conn->close();
}


function deleteContact($id) {
    $conn = connectDB();
    $sql = "DELETE FROM contacts WHERE id=$id";
    $conn->query($sql);
    $conn->close();
}
?>
