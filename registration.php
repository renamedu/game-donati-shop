<?php
    session_start();
    require_once 'database/connection.php';

    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php'?>
    <div class="main-back">
        <div class="login-back">
            <form class="login-form" action="database/signup.php" method="POST">
                <input name="username" type="text" placeholder="Username">
                <input name="email" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <input name="password_confirm" type="password" placeholder="Confirm password">
                <button type="submit">Sign up!</button>
                <a href="login.php">Login</a>
                <?php require_once 'database/loginMessage.php'?>
            </form>
        </div>
    </div>
    <?php require 'footer.php'?>
    <script src="script.js"></script>   
</body>

</html>