<?php
session_start();
if (isset($_SESSION['id'])&&($_SESSION['id']>0)) {
?>

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
        max-width: 1300px;
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
    .b {
        /* padding: 40px; */
        position: absolute;
        /* padding-left: 70px; */
        display: none;
        z-index: 3;
        top:85px;
        right: 200px;
       
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        border-radius: 5px;
    }
    .b p a{
        text-decoration: none;
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
   .header{
    margin-bottom: 50px;
   }
 .btn{
    display: flex;
    gap: 3px;
 }
 .t{
    text-decoration: none;
 }
</style>

<body>
    <div class="container">
   

    <header class="header">
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
                    <p> <a href="../control/login_out.php">Đăng xuất</a></p><hr>
                    <p> <a href="./change_Password.php">Đổi mật khẩu</a></p><hr>
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
                    <th class="text-[white]">mã đơn hàng</th>
                    <th class="text-[white]">Tên sản phẩm</th>
                    <th class="text-[white]">Số điện thoại</th>
                    <th class="text-[white]">Địa chỉ</th>
                    <th class="text-[white]">Trạng thái đơn</th>
                    <th class="text-[white]">Tổng tiền</th>
                    <th></th>


                </tr>
            </thead>

            <tbody>
                <?php
                require "../models/connect.php";
                //    $query = "SELECT * FROM products"; 
                //    $productList = getAll($query);
                $id = $_SESSION["id"];
                $user = "SELECT * FROM bill WHERE id_user = $id";
                $productList = getAll($user);
                ?>

<?php 
                foreach($productList as $product):?>
                <tr>   
                    <td>
                        <?php echo $product["id"]?>
                    </td>
                    <td>
                        <?php echo $product['fullname']?>
                    </td>
                    <td>
                        <?php echo $product['phone']?>
                    </td>
                    <td>
                        <?php echo $product['diachi']?>
                    </td>
                    <td>
                        <?php echo $product['orderstatus']?>
                    </td>
                    <td> <?php echo $product['total_money']?></td>
                    <td class="btn">
                        <form action="../control/control_huyDon.php" method="POST">
                            <input hidden type="text" value="<?php echo $product['id']?>" name="id" id="">
                        <input hidden type="text" value="Hủy đơn hàng" name="xacnhan" id="">
                        <input type="text" hidden value="Đang giao hàng" name="dang_giao" id="">
                        <button class="btn btn-secondary">Hủy</button>
                    </form>
                    <a class="t"  href="./bill_detail.php?id=<?php echo$product["id"]?>"><button class="btn btn-success">Chi tiết</button></a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        
    </div>
    <div class="page-footer">
<div class="footer">
    <div class="footer-address">
        <h2>HEROBIZ</h2>
        <div class="address">
            <p>A108 Adam</p>
            <p>NY 535022</p>
        </div>
        <p>Phone:+1 5589</p>
        <p>Emaillinfo@example.com</p>
    </div>
    
    <div class="nav1">
        <h3>Our</h3>
        <p>Web</p>
        <p>Web</p>
        <p>Product</p>
        <p>Marketing</p>
        <p>Graphic</p>
    </div>
    <div class="footer-contaect">
        <div class="contaect">
            <h3>Our</h3>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam moster magna</p>  
        </div>
        <form action="">
            <input type="text" name="" id="">
            <button></button>
        </form>
    </div>
</div>
<div class="sub-footer">
        <div class="chu">
            <div class="end">
                <span>©</span>
                <span>HeroBiz</span>
                <span>. All Rights<span>
            </div>
            <div class="designed">
                <span>Designed</span>
                <span><a href="">BootstrapMade</a></span>
            </div>
        </div>
        <div class="block">
            <div class="block-same"></div>
            <div class="block-same"></div>
            <div class="block-same"></div>
            <div class="block-same"></div>
            <div class="block-same"></div>
        </div>
    </div>
</div>
</body>

</html>
<?php }else{
     header("location:./dangNhap.php");
    }?>