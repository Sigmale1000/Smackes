<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/post.css">
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Smackes | Share your stories with the world!</title>
</head>

<body>
    <div class="wrapper">
        <?php require "main/topnav.php" ?>
        <div class="content">
            <?php require 'main/sidenav.php' ?>
            <hr>
            <div class="main-content">
                <?php
                $view = $_GET["p"];

                // Check if the user is logged in, if not then redirect him to login page
                
                if (!isset($_SESSION["username"]) || $_SESSION["username"] === '') {
                    $view = 'account';
                }



                ?>
                <?php if ($view === 'explore') {
                    require 'content/explore.php';
                } elseif ($view === 'notifications') {
                    require 'content/notifications.php';
                } elseif ($view === 'saved') {
                    require 'content/saved.php';
                } elseif ($view === 'post') {
                    require 'content/post.php';
                } elseif ($view === 'account') {
                    require 'content/account.php';
                } elseif ($view === 'login') {
                    require 'content/login.php';
                } elseif ($view === 'about') {
                    require 'content/about.php';
                } elseif ($view === 'view-news') {
                    require 'content/view-news.php';
                } elseif ($view === 'profile') {
                    require 'content/profile.php';
                } elseif ($view === 'logout') {
                    require 'content/logout.php';
                } else {
                    require 'content/home.php';
                }
                ?>
            </div>
            <hr>
            <?php require 'main/news.php' ?>
        </div>
        <?php require 'main/footer.php' ?>
    </div>
</body>

</html>