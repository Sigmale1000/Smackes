<?php
require './controller/login-control.php';
?>

<div class="container_sidenav">
    <div class="sidebar-top">
        <a href="index.php?p=home"> <i class="fa-solid fa-house"></i>Home</a>
        <a href="index.php?p=explore"> <i class="fa-solid fa-binoculars"></i>Explore</a>
        <a href="index.php?p=notifications"> <i class="fa-solid fa-bell"></i>Alert</a>
        <a href="index.php?p=saved"> <i class="fa-solid fa-bookmark"></i>Saved</a>
        <a href="index.php?p=post" style="background-color: blueviolet;"> <i
                class="fa-solid fa-feather write"></i>Smack</a>
    </div>
    <div class="sidebar-bottom">
        <?php
        if (!isset($_SESSION["username"]) || $_SESSION["username"] === '') {
        ?> <a href="index.php?p=account"><i class="fa-solid fa-right-from-bracket"></i>Login</a>
        <?php } else { ?>
        <a href="index.php?p=profile"><i class="fa-solid fa-user"></i>Profile</a>
        <a href="index.php?p=logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        <?php } ?> <a href="index.php?p=about"><i class="fa-solid fa-cookie-bite"></i>About</a>
    </div>
</div>