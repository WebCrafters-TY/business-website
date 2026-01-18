<?php
include "config.php";
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];

$conn->query("DELETE FROM messages WHERE id=$id");

header("Location: admin_dashboard.php");
?>
