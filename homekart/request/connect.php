<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


//echo "$name\n$message\n$phone\n$time\n$date";

//echo "$message"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
global $conn;

// Check connection
if ($conn->connect_error) {
    echo "Submition error";
    die("Connection failed: " . $conn->connect_error);
} 
