<?php
// Include database connection
include "config.php";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

$conn->query($sql);

// Redirect back to homepage
header("Location: index.php?success=1");
?>
