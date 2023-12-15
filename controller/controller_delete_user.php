<?php
    require "../models/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM users WHERE id = $id";
    connect($query);
    header("location:../view/admin/quanLi_user.php")
?>