<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php 
// echo 1;die;
    require "../../models/connect.php";
    $productId = $_GET["id"];
    
    // var_dump($productid);die;   
    $query = "SELECT * FROM products WHERE id=$productId";
    $product = getOne($query);
    // echo "<pre>";
    // var_dump($product);
   
?>
<form action="../../control/control_update.php" method="POST" enctype="multipart/form-data" class="w-[500px] m-auto">
        <input type="text" name="product-id" id="" value="<?php echo $productId?>"  class="w-full border mt-8">
        <input type="text" name="product-name" placeholder="Product Name" class="w-full border mt-8" value="<?php echo $product["name"]?>"  class="w-full border mt-8">
        <textarea name="product-desc" id="" cols="30" rows="10" placeholder="Product Desc" class="w-full border mt-8"><?php echo $product["descrtiption"]?></textarea>
        <input type="file" name="product-image" class="w-full border mt-8">
        <input type="text" name="old-image" value="<?php echo $product['image']?>" hidden>
        <input type="text" name="product-price" placeholder="Product Price" class="w-full border mt-8" value="<?php echo $product["price"]?>">
        <input type="text" name="number" placeholder="Product number" class="w-full border mt-8" value="<?php echo $product["number"]?>">
        <select name="category" id=""  class="w-full border mt-8">
            <?php
            require_once "../../models/connect.php";
            $query = "SELECT * FROM categoryid";
            $categoryList = getAll($query);
            // echo "<pre>";
            // var_dump($categoryList);
            ?>
            <?php foreach($categoryList as $cate):?>
                <option value="<?php echo $cate["iddm"]?>"><?php echo $cate["namee"]?></option>
            <?php endforeach?>
        </select>
        <button class="w-full bg-green-700 text-white mt-8">cập nhật</button>
    </form>
</body>
</html>