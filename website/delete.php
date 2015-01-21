<?php
    include "connection.php";

    $id=$_GET['id'];
    $query="DELETE FROM `website_db`.`users_db` WHERE `users_db`.`id` = $id";
    mysqli_query($con,$query);
    header('location: dashboard.php');
    mysqli_close($con);