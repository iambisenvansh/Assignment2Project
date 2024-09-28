<?php
include 'functions.php';

// fetch all contacts from database
$contacts = getContacts();
include 'views/a-index.view.php';
?>
