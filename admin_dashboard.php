<?php
include "config.php";
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Search
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = $conn->query("SELECT * FROM messages 
        WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR message LIKE '%$search%' 
        ORDER BY id DESC");
} else {
    $result = $conn->query("SELECT * FROM messages ORDER BY id DESC");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
    <span class="navbar-brand">Admin Dashboard</span>
    <div>
        <a href="change_password.php" class="btn btn-warning btn-sm">Change Password</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
    </div>
</nav>

<div class="container mt-4 bg-white p-4 shadow rounded">

    <h3 class="mb-3">Messages</h3>

    <!-- Search -->
    <form method="GET" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Search..." value="<?= $search ?>">
        <button class="btn btn-primary">Search</button>
    </form>

    <table class="table table-bordered table-hover">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['message'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
                <a href="delete_message.php?id=<?= $row['id'] ?>" 
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure?')">
                    Delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
