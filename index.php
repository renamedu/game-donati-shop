<?php
require 'database/connection.php';
if (!isset($_GET['sort']) || $_GET['sort'] == 'rating') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Rating` DESC");
} elseif ($_GET['sort'] == 'price-down') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Price` DESC");
} elseif ($_GET['sort'] == 'price-up') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE (`New` != 0 OR `Discount_price` != 0) ORDER BY `goods`.`Price` ASC");
}
$goodsFetch = mysqli_fetch_all($goods);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - Specials</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
      require 'header.php';
    ?>
    <div class="main-back">
        <div class="shop-section">
            <h2>Special offers</h2>
        </div>
        <?php
            require 'goods-list.php';
        ?>   
    </div>
    <?php require 'footer.php'?>
    <script src="script.js"></script>
</body>

</html>