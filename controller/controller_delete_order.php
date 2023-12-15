<?php
    require "../models/connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM cart WHERE id = $id";
    connect($query);
    header("location:../viewND/giohang.php");
?>