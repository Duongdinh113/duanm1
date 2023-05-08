<?php
// echo 1;die;
    require "../models/connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM categoryid WHERE id = $id";
    connect($query);
    header("location:../view/admin/quanLi_danhMuc.php");
?>