<?php
session_start();
if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/layout.css">
        <title>GIỎ HÀNG </title>
    </head>
    <style>
        
        input{
            width: 50px;
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
   .img{
    width: 70px;
    height: 100px;
   }
   .header{
    margin-bottom: 50px;
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
                        <li><a href="lienhe.php">Liên Hệ </a></li>
                        <li><a href="donHangdaMua.php">Đơn hàng </a></li>
                        <li><a href="./giohang.php">Giỏ Hàng</a></li>
                    </ul>
                </div>

                <div class="authenticate">
                    <?php
                    if (empty($_SESSION["email"])) {
                        echo ' <div >
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup">  <a href="dangKi.php">Đăng kí</a></button>
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
            <?php

            require "../models/connect.php";
            $id_user = $_SESSION['id'];
            $query = "SELECT * FROM cart WHERE id_user = $id_user";

            $pr = getAll($query);

            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>stt</th>
                        <th>tên sản phẩm</th>
                        <th>image</th>
                        <th>số lượng</th>
                        <th>Giá</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php $tong = 0;
                    $count = 0;
                    $tongsl = 0;
                    ?>

                    <?php foreach ($pr as $pro): ?>
                        <tr>
                            <?php $count = $count + 1 ?>
                            <td>
                                <?= $count ?>
                            </td>
                            <td>
                                <h3>
                                    <?= $pro['name'] ?>
                                </h3>
                            </td>
                            <td><img class="img" src="<?= "../image/" . $pro['image'] ?>" alt=""></td>
                            <td><input type="number" value="<?= $pro['sl'] ?>" name="" id=""></td>
                            <td>
                                <h3>
                                    <?= $pro['gia'] ?>
                                </h3>
                            </td>
                            <td><a class="btn btn-success" href="../control/control_xoaDonhang.php?id=<?php echo $pro['id'] ?>">xóa</a></td>
                           
                            <td>
                                <?php
                                require_once "../models/connect.php";
                                $id_p = $pro['id_p'];
                                $products ="SELECT * FROM products WHERE id = $id_p";
                              $product = getOne($products);
                          
                                ?>
                            </td>
                            <?php
                            $tongsp = $product['number'];
                            $sl = $pro['sl'];
                            $gia = $pro['gia'];
                            $tong = $tong + ($sl * $gia);
                            $tongsl = $tongsp - $sl
                            ?>

                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <td> Tổng tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?= $tong ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <form action="./thongTin.php" method="POST">
            <input type="text" hidden value="<?= $id_p?>" name="ip_p" id="">
            <input type="text" hidden value="<?= $tong?>" name="price" id="">
            <input type="text" hidden value="<?= $tongsl?>" name="number" id="">
            <button>Thanh toán</button>
            </form>
           
            
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
    <div class="footer-nav">
        <div class="nav">
            <h3>Useful</h3>
            <p>Home</p>
            <p>About us</p>
            <p>Services</p>
            <p>Terms of</p>
            <p>Privacy</p>
        </div>
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
<?php } else {
    header("location:./dangNhap.php");
}
?>
