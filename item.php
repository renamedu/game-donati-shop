<?php
session_start();
require 'database/connection.php';
$id = $_GET["id"];
$item = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM `goods` WHERE `ID` = $id"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - <?= $item['Name'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php' ?>
    <div class="main-back">
        <div class="shop-section">
            <h2><?= $item['Name'] ?></h2>
        </div>
        <main class="item-main">
            <div class="item-img">
                <img src="<?= $item['img'] ?>" alt="<?= $item['Name'] ?>" class="item-img-img">
            </div>
            <div class="item-description">
                <p class="description">
                    <?= $item['Description'] ?>
                </p>
            </div>
            <div class="item-buttons">
                <?php
                if ($item['Discount_price'] != 0) {
                ?>
                    <div class="el-price price-discount"><?= $item['Price'] ?>$</div>
                    <div class="new-price"><?= $item['Discount_price'] ?>$</div>
                <?php
                } else {
                ?>
                    <div class="el-price"><?= $item['Price'] ?>$</div>
                <?php
                }
                ?>
                <form action="database/buy-button.php" method="GET">
                    <input type="hidden" name="id" value="<?= $item['ID'] ?>">
                    <button type="submit" class="item-buy-button">Buy</button>
                </form>
            </div>
        </main>
    </div>
    <?php require 'footer.php' ?>
    <script src="script.js"></script>
</body>

</html>