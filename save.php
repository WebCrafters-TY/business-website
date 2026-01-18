<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
$conn->query($sql);

header("Location: index.php");
?>