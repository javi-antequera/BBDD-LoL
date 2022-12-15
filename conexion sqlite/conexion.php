<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
    exit();
}   
    echo "Connected successfully";
?>