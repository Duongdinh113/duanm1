<?php 
    require '../models/connect.php';
    $name = $_POST["name"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $vande = $_POST["vande"];
    

    $query = "INSERT INTO contact (name,sdt,email,vande) VALUES ('$name','$sdt','$email','$vande')";
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:../viewND/lienhe.php");
?>