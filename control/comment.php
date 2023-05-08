<?php
    require "../models/connect.php";

    $id_u = $_POST["id_u"];
    $id_p = $_POST["id_p"];
    $comment = $_POST["comment"];
    $name = $_POST["name"];
    $query = "INSERT INTO comment (idu, idp, comment, name) VALUES ($id_u,$id_p,'$comment','$name')";
    // var_dump($query);die;

    connect($query);
    header("location:../viewND/chiTietSanPham.php?id=$id_p");
?>