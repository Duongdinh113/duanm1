<?php 

    require "../models/connect.php";
    $id_p = $_POST["id_p"];
    $id_user = $_POST['id_user'];
    $name = $_POST['name'];
    $sl = $_POST['sl'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    // var_dump($_POST);die;

    $query = "INSERT INTO `cart`(`id_p`, `id_user`, `name`, `image`, `sl`, `gia`) VALUES ($id_p,$id_user,'$name','$image',$sl,$price)";
   
    move_uploaded_file($_FILES["image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
   connect($query);
    // var_dump($_POST);
    header("location:../viewND/giohang.php");
    
?>