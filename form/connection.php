

<?php

$servername = "localhost";
$username = "root";
$password = "";
$DB="db_talor";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$DB);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo " ";















?>