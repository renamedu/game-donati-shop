<?php
if (!isset($_GET['sort']) || $_GET['sort'] == 'rating') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Rating` DESC");
} elseif ($_GET['sort'] == 'price-down') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Price` DESC");
} elseif ($_GET['sort'] == 'price-up') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Price` ASC");
}
$goodsFetch = mysqli_fetch_all($goods);