<?php
require_once 'database/connection.php';
?>

<nav class="header-nav">
    <div class="main-nav">
        <a href="" class="main-nav-el">Game</a>
        <a href="" class="main-nav-el">Shop</a>
        <a href="" class="main-nav-el">Support</a>
    </div>
    <div class="profile-info">
        <a href="login.php" class="main-profile">
            <?php
                if (isset($_SESSION['user'])) {
                    print_r($_SESSION['user']['Username']);
                } else {
                    ?>
                    Login
                    <?php
                }
            ?>
        </a>
    </div>
</nav>
<header>
    <div class="header-name">
        <a href="index.php">
            <h1>
                GameDonati <br>Shop
            </h1>
        </a>
    </div>
    <nav class="shop-nav">
        <ul class="shop-list">
            <li class="shop-list-el">
                <a href="index.php" class="shop-list-a">Specials</a>
            </li>
            <li class="shop-list-el">
                <a href="skins.php" class="shop-list-a">Skins</a>
            </li>
            <li class="shop-list-el">
                <a href="coins.php" class="shop-list-a">D-coins</a>
            </li>
            <li class="shop-list-el">
                <a href="premium.php" class="shop-list-a">Premium</a>
            </li>
            <li class="shop-list-el">
                <a href="cart.php" class="shop-list-a">Cart</a>
            </li>

        </ul>
        <!-- <div class="shop-search">
                <input type="search" class="search-input">
                <button class="search-btn">go</button>
            </div> -->
    </nav>
</header>