<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "business_site";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

//check connection
if ($conn->connect_error) {
    die("Database connection failed: " .$conn->connect_error);
}
?>