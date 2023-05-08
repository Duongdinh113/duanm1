<?php 
// echo 1;die;
    require "../models/connect.php";
   
    
    
    $id = $_POST["product-id"];

    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    
    $productPrice = $_POST["product-price"];
    $categoryId = $_POST["category"];
    $number = $_POST['number'];
    

    // var_dump($_POST);die;
    if(empty($_FILES["product-image"]["name"])){ //kiểm tra xem có chọn ảnh hay không bằng cách check key "name" có trả về chuỗi rỗng hay không
        $productImage = $_POST["old-image"];//nếu "name" trả về rỗng thì thực hiện lấy tên ảnh cũ từ $_POST theo key "old-image" để gán cho biến $productImage
    
    }else{
        $productImage =  $_FILES["product-image"]["name"];
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
    }
    $query = "UPDATE products SET name='$productName', descrtiption='$productDesc', image ='$productImage' , price=$productPrice , class=$categoryId , number=$number WHERE id= '$id'"; 
    connect($query);
    // var_dump($query);die;
    header("location: ../view/admin/product_management.php");
?>  