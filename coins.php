<?php
session_start();
require 'database/connection.php';
require 'database/sortCheck.php';
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