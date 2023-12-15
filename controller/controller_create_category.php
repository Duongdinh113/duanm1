<?php 
    require '../models/connect.php';
    $Name = $_POST["loai"];

    $query = "INSERT INTO categoryid (namee) VALUES ('$Name')";
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:../view/admin/quanLi_danhMuc.php");
?>