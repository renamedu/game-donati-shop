<?php
session_start();
require_once 'connection.php';
require_once 'authCheck.php';

$ID = $_GET['id'];

mysqli_query($connection, "DELETE FROM `Cart` WHERE `Cart`.`ID` = '$ID'");

header('Location: ../cart.php');