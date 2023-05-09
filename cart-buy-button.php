<?php
session_start();
require_once 'connection.php';

if (!$_SESSION['user']) {
    header('Location: login.php');
};

$coins = $_SESSION['cart']['D-coins'];
$premium = $_SESSION['cart']['Premium'];
$ID = $_SESSION['user']['ID'];

$Balance_have = mysqli_query($connection, "SELECT `Balance` from `Account` WHERE `Account`.`ID` = '$ID'");
$Balance_have = mysqli_fetch_assoc($Balance_have)['Balance'];
$Total_balance = $Balance_have + $coins;

$Premium_have = mysqli_query($connection, "SELECT `PremiumCount` from `Account` WHERE `Account`.`ID` = '$ID'");
$Premium_have = mysqli_fetch_assoc($Premium_have)['PremiumCount'];
$Total_premium = $Premium_have + $premium;

mysqli_query($connection, "UPDATE `Account` SET `Balance` = '$Total_balance' WHERE `Account`.`ID` = '$ID'");
mysqli_query($connection, "UPDATE `Account` SET `PremiumCount` = '$Total_premium' WHERE `Account`.`ID` = '$ID'");

mysqli_query($connection, "DELETE FROM `Cart` WHERE `Cart`.`AccountID` = '$ID'");

header("location: index.php");

?>