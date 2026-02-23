<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Dashboard</h2>
    <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong> 🎉</p>

    <a href="logout.php" class="btn logout">Logout</a>
</div>

</body>
</html>