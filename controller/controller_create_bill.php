<?php 
session_start();
    function add_bill_detail($detail = [], $bill_id ){
        $user = $_SESSION['id'];
        $id_sp = $detail['id_p'];
        $quantity = $detail['sl'];
        $price = $detail['gia'];
        $total_price = $quantity * $price;
        $query = "INSERT INTO `billdetail`(`id_user`,`id_bill`, `id_sp`, `sl`, `total_price`) VALUES ('$user','$bill_id','$id_sp','$quantity','$total_price')";
        connect($query);
    }
?>

<?php 
    require "../models/connect.php";
    $id =  uniqid();
    $id_user = $_POST['id'];
    $name = $_POST['name'];
    $diachi = $_POST['diachi'];
    $phone= $_POST['sdt'];
   $tongTien = $_POST['tongTien'];
    $query = "INSERT INTO `bill`(`id`, `id_user`, `fullname`, `phone`, `diachi`,`total_money`) VALUES ('$id','$id_user','$name','$phone','$diachi','$tongTien')";
    

    connect($query);
    $cart_query = "SELECT * FROM cart WHERE id_user = $id_user";
    $cart_body = getAll($cart_query);
    // var_dump($cart_body);
    foreach($cart_body as $cart_bodys){
        add_bill_detail($cart_bodys,$id);
    }

    $tongsl = $_POST['number'];
    $id_p =$_POST['idsp'];
    $query = "UPDATE `products` SET `number`='$tongsl' WHERE id = '$id_p'";
    connect($query);

    $query = "DELETE FROM cart WHERE id_user = $id_user";
    connect($query);
    header('location:../viewND/daMua.php')
?>