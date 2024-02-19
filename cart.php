<?php
session_start();
require_once 'database/connection.php';
require_once 'database/authCheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameDonati Shop - Cart</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php' ?>
    <div class="main-back">
        <div class="cart">
            <table>
                <tr>
                    <th>Name</th>
                    <th>D-coins</th>
                    <th>Premium</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                <?php
                    $ID = $_SESSION['user']['ID'];
                    $check_cart = mysqli_query($connection, "SELECT * FROM `Cart` WHERE `AccountID` = '$ID'");
                    $cart = mysqli_fetch_all($check_cart);
                    
                    $total_coins = $total_coins ?? 0;
                    $total_premium = $total_premium ?? 0;
                    $total_cost = $total_cost ?? 0;
                    foreach ($cart as $item) {
                        
                        $ID = $item[2];
                        $good = mysqli_query($connection, "SELECT * FROM `goods` WHERE `ID` = '$ID'");
                        $good = mysqli_fetch_assoc($good);

                        if ($good['Discount_price'] > 0) {
                            $cost = $good['Discount_price'];
                        } else {
                            $cost = $good['Price'];
                        };

                        $total_coins += $good['Amount_coins'];
                        $total_premium += $good['Amount_time'];
                        $total_cost += $item[4];

                        ?>
                            <tr>
                                <td><?= $good['Name']?></td>
                                <td><?= $good['Amount_coins']?></td>
                                <td><?= $good['Amount_time']?></td>
                                <td><?= $cost?></td>
                                <td><a href="database/cart-del-item.php?id=<?= $item[0] ?>">Remove</a></td>
                            </tr>
                        <?php
                    };

                    $_SESSION['cart'] = [
                        "D-coins" => $total_coins,
                        "Premium" => $total_premium,
                    ];
                    ?>
                    <tr>
                    <th>Total cost</th>
                    <th><?= $total_coins?></th>
                    <th><?= $total_premium?></th>
                    <th><?= $total_cost ?></th>
                    <td><a href="database/cart-buy-button.php">Buy</a></td>
                    </tr>
                    <?php

                    ?>
            </table>
        </div>
    </div>
    <?php require 'footer.php' ?>
    <script src="script.js"></script>
</body>

</html>