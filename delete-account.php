<?php
session_start();
require_once 'connection.php';

if (!$_SESSION['user']) {
    header('Location: login.php');
};

$ID = $_SESSION['user']['ID'];

mysqli_query($connection, "DELETE FROM `Account` WHERE `Account`.`ID` = '$ID'");
unset($_SESSION['user']);

header('Location: index.php');
?>

