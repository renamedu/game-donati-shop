<?php
session_start();
require_once 'connection.php';

if (!$_SESSION['user']) {
    header('Location: login.php');
};
$ID = $_SESSION['user']['ID'];

$Balance_have = mysqli_query($connection, "SELECT `Balance` from `Account` WHERE `Account`.`ID` = '$ID'");
$Balance_have = mysqli_fetch_assoc($Balance_have)['Balance'];

$Premium_have = mysqli_query($connection, "SELECT `PremiumCount` from `Account` WHERE `Account`.`ID` = '$ID'");
$Premium_have = mysqli_fetch_assoc($Premium_have)['PremiumCount'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - <?= $_SESSION['user']['Username'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php'?>
    <div class="main-back">
        <div class="profile-back">
            <div class="profile-data">
                <h3>
                Username - <?= $_SESSION['user']['Username'] ?>
                </h3>
                Email - <?= $_SESSION['user']['Email'] ?>
                <br>
                Balance - <?= $Balance_have ?>$
                <br>
                PremiumCount - <?= $Premium_have ?>
            </div>
            <div class="profile-buttons">
                <a class="logout-b" href="logout.php">Logout</a>
                <a class="delete-b" href="delete-account.php">Delete account</a>
            </div>
        </div>
    </div>
    <?php require 'footer.php'?>
    <script src="script.js"></script>
</body>

</html>