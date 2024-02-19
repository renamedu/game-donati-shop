<?php
session_start();
require_once 'connection.php';
require_once 'authCheck.php';

$ID = $_GET['id'];

$check_good = mysqli_query($connection, "SELECT * FROM `goods` WHERE `ID` = '$ID'");
$good = mysqli_fetch_assoc($check_good);

$date = date("Y-m-d H:m:s");
$AccountID = $_SESSION['user']['ID'];
$GoodID = $good['ID'];

if ($good['Discount_price'] > 0) {
    $cost = $good['Discount_price'];
} else {
    $cost = $good['Price'];
};

mysqli_query($connection, "INSERT INTO `Cart` (`ID`, `AccountID`, `GoodID`, `Date`, `cost`) VALUES (NULL, '$AccountID', '$GoodID', '$date', '$cost')");

header("location:javascript://history.go(-1)");