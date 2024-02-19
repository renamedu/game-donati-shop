<?php
if (!isset($_SESSION['user'])) {
    header('Location: /game-donati-shop/login.php');
};