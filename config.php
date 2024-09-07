<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'online');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful
// Optionally, you can set character encoding
mysqli_set_charset($con, 'utf8');
?>
