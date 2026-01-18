<?php
include "config.php";
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old = $_POST['old'];
    $new = $_POST['new'];

    $username = $_SESSION['admin'];

    $check = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$old'");

    if ($check->num_rows > 0) {
        $conn->query("UPDATE admin SET password='$new' WHERE username='$username'");
        $msg = "Password changed successfully!";
    } else {
        $error = "Old password is incorrect!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto bg-white p-4 shadow rounded">

        <h4 class="text-center mb-3">Change Password</h4>

        <?php if(isset($msg)) echo "<div class='alert alert-success'>$msg</div>"; ?>
        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST">
            <input type="password" name="old" class="form-control mb-3" placeholder="Old Password" required>
            <input type="password" name="new" class="form-control mb-3" placeholder="New Password" required>
            <button class="btn btn-primary w-100">Change Password</button>
        </form>

    </div>
</div>

</body>
</html>
