<?php
    session_start();
    require_once 'connection.php';

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    if ($password !== $password_confirm) {
        $_SESSION['message'] = '<script>alert("passwords do not match.")</script>';
        header('Location: registration.php');
    } elseif (strlen($username) < 4) {
        $_SESSION['message'] = '<script>alert("Username is too short. 4 characters at least")</script>';
        header('Location: registration.php');
    } elseif (strlen($email) < 4) {
        $_SESSION['message'] = '<script>alert("Email is too short. 4 characters at least")</script>';
        header('Location: registration.php');
    } elseif (strlen($password) < 6) {
        $_SESSION['message'] = '<script>alert("Password is too short. 6 characters at least")</script>';
        header('Location: registration.php');
    } else {
       $password = md5($password);

       mysqli_query($connection, "INSERT INTO `Account` (`ID`, `username`, `email`, `password`, `Balance`, `PremiumCount`, `DateExpire`) VALUES (NULL, '$username', '$email', '$password', '0', '0', NULL)");
       $_SESSION['message'] = '<script>alert("Registration success!")</script>';
       header('Location: login.php');
   };

        

?>