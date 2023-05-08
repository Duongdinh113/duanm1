<?php
    require '../models/connect.php';
    $id = $_GET['id'];
   
    $ten = $_POST['name'];
    $sdt = $_POST['sdt'];
    $diaChi = $_POST['diaChi'];
    $tongTien = $_POST['tongTien'];
    $tensp = $_POST['tensp'];
    $sl = $_POST['sl'];
  
    $query ="INSERT INTO `oder`(`tensp`, `sl`, `name`, `sdt`, `diaChi`, `tongTien`) VALUES ('$tensp',$sl,'$ten',$sdt,'$diaChi','$tongTien')";
    connect($query);
    $cart = "DELETE FROM cart WHERE id_user = $id";
    connect($cart);
    
    header('location:../viewND/daMua.php');
?>