<?php
    session_start();
    require_once 'connection.php';

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5($_POST['password']));

    $check_user = mysqli_query($connection, "SELECT * FROM `Account` WHERE `email` = '$email' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "Username" => $user['username'],
            "Email" => $user['email'],
            "ID" => $user['ID'],
        ];

        header('location: ../profile.php');
    } else {
        $_SESSION['message'] = "Invalid username or password!";
        header('Location: ../login.php');
    }