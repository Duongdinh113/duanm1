

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .container {
        max-width: 1200px;
        padding: 0;
        margin: 0 auto;
        box-sizing: border-box;
    }
   td{
   height: 60px;
   margin-top: 20px
    }
    .c:hover .b{
    display: block;
    }
    .b{
        padding: 40px;
        position: absolute;
        padding-left: 70px;
        display: none;
    }
    .c{
        display: flex;
    }
    .a{
    width: 50px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 50px;
   }
</style>

<body>
    <div class="container">
    <?php session_start()?>

    <header>
            <div class="logo">
                <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="./lienhe.php">Liên Hệ</a></li>
                    <li><a href="donHangdaMua.php">Đơn hàng </a></li>
                    <li><a href="./giohang.php">Giỏ Hàng</a></li>
                </ul>
            </div>

            <div class="authenticate">
                <?php
                if (empty($_SESSION["email"])) {
                    echo ' <div>
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup"><a href="dangKi.php">Đăng kí</a></button>
                    </div>';
                } else {
                    echo '<div class="c"><img class="a" src="../image/'.$_SESSION['image'].'" alt=""><p>'.$_SESSION['email'].'</p>
                    <div class="b">
                    <p> <a href="../control/login_out.php">Đăng xuất</a></p>
                    <p> <a href="./forgotPassword.php">Đổi mật khẩu</a></p>
                    <p>tài khoản của tôi</p>
                   </div>
                   </div>
                    ';
                }
                ?>
            </div>
        </header>

       
        <table class="table">
            
            <thead>
                <tr class="bg-[black] h-[50px]">
                
                <th class="text-[white]">Tên sản phẩm</th>
                <th class="text-[white]">Số lượng</th>
                <th class="text-[white]">Giá</th>
                

                
                </tr>
            </thead>
           
            <tbody>
            <?php 
    require "../models/connect.php";
    $id = $_GET["id"];
    $id_user = $_SESSION['id'];
    $query = "SELECT `id`, `id_bill`, `id_sp`, `sl`, `total_price` FROM `billdetail` WHERE id_bill = '$id' && id_user =$id_user";
    $billdetail = getAll($query);
?>

 <?php foreach($billdetail as $item):?>
                <tr>   
                   <td>
                        <?php $id_sp = $item['id_sp'];
                        $query = "SELECT * FROM products WHERE id = $id_sp";
                        $product = getOne($query);
                        echo $product['name'];
                        ?>

                   </td>
                   <td>
                    <?= $item['sl']?>
                   </td>
                   <td>
                    <?= $item['total_price']?>
                   </td>
                
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <a class="text-[white]" href="./donHangdaMua.php"><button class="btn btn-success">quay lại</button></a>
    </div>
</body>

</html>
