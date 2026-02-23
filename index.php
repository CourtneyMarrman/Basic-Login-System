<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Welcome to Login System</h1>

    <?php if(isset($_SESSION['user_id'])): ?>
        <p>You are logged in as <strong><?php echo $_SESSION['username']; ?></strong></p>
        <a href="dashboard.php" class="btn">Go to Dashboard</a>
        <a href="logout.php" class="btn logout">Logout</a>
    <?php else: ?>
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Register</a>
    <?php endif; ?>
</div>

</body>
</html>