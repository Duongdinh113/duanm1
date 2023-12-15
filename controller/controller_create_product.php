<?php 
    require '../models/connect.php';
  
    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage = $_FILES["product-image"]["name"];
    $deal = $_POST["deal"];
    $productPrice = $_POST["product-price"];
  
    $categoryId = $_POST["category"];
    $number = $_POST['number'];
    
    
    $query = "INSERT INTO products (name, descrtiption, image, deal, price, class,number) VALUES ('$productName','$productDesc','$productImage',$deal,$productPrice,$categoryId,$number)";
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
   
    // var_dump($query);die;
    // echo "<pre>";
    // var_dump($_FILES);die; 
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:../view/admin/product_management.php");
?>