<?php 
    require "../models/connect.php";
  
 
    
    $query = "SELECT * FROM bill";
    $bills = getAll($query);
 
    $check = false;
    foreach($bills as $bill){
        if($bill['orderstatus'] == $_POST['dang_giao'] && $bill['id'] == $_POST['id'] ){
            //    var_dump($bill);die;
            
            $check = true;
            header("location:../viewND/donHangdaMua.php?msg=$msg");
        };
    }
    if(!$check){
        $id = $_POST['id'];
        $name = $_POST['xacnhan'];
   
        $query = "UPDATE `bill` SET `orderstatus`='$name' WHERE id = '$id'";
        connect($query);
        header("location:../viewND/donHangdaMua.php");
    }
  
    
?>