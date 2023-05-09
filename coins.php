<?php
require 'connection.php';
if ($_GET['sort'] == 'price-up') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE `Section` = 'Coins' ORDER BY `goods`.`Price` ASC");
} elseif ($_GET['sort'] == 'price-down') {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE `Section` = 'Coins' ORDER BY `goods`.`Price` DESC");
} else {
    $goods = mysqli_query($connection, "SELECT * FROM `goods` WHERE `Section` = 'Coins' ORDER BY `goods`.`Rating` DESC");
}
$goodsFetch = mysqli_fetch_all($goods);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - D-coins</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        require 'header.php';
    ?>
    <div class="main-back">
        <div class="shop-section">
            <h2>D-coins</h2>
        </div>
        <?php
            require 'goods-list.php';
        ?>
    </div>
    <?php require 'footer.php'?>
    <script src="script.js"></script>

</body>

</html>