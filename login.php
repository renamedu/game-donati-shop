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
    <title>GameDonati Shop - Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php'?>
    <div class="main-back">
        <div class="login-back">
            <form class="login-form" action="database/signin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
                <a href="registration.php">Create account!</a>
                <?php require_once 'database/loginMessage.php'?>
            </form>
        </div>
    </div>
    <?php require 'footer.php'?>
    <script src="script.js"></script>
</body>

</html>