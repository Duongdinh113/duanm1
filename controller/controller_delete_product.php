<?php 
// echo 1; die;
    require "../models/connect.php";

    $id = $_GET["id"];

    $query = "DELETE FROM products WHERE id =$id";
    connect($query);
    header("location:../view/admin/product_management.php")
?>