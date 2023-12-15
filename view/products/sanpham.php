<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">

    <title>SẢN PHẨM</title>
</head>
<style>
    .slide {
        gap: 30px;
        display: grid;
        grid-template-columns: 0.3fr 1fr;
        margin-top: 10%
    }
    


    .sanpham1 {
        display: grid;
    }
    .sanpham1 h3{
        text-align: center;
    }
    .sanpham1 p{
        padding-left: 30px;
    }
    .sanpham1 span{
        padding: 0px 10px 30px 30px;
    }

    .a {
        width: 50px;
        border-radius: 50%;
        border: 0.1875em solid #0F1C3F;
        height: 50px;
    }

    

    .loai {
        border-radius: 5px;
        /* width: 319px; */
        height: 500px;
        /* border: 1px solid black; */
        background-color: #F4F4F4;
    }

    .loai h1 {
        border-bottom: 1px solid black;
        text-align: center;
    }

    .loai a {
        text-decoration: none;
        text-transform: capitalize;

    }

    .loai h2 {
        padding-bottom: 25px;
        border-bottom: 1px solid #cdcd;
        text-align: center;

    }

    .sanpham {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        border-radius: 5px;
        gap: 25px;
        background-color: #F4F4F4;
        padding: 15px 15px;
    }

    .sanpham1 {
        /* width: 300px; */
        /* border: 1px solid black; */
        border-radius: 15px;
        background-color: white;
    }

    .sanpham1 a img {
        margin: 10px 10px;
        width: 94%;
        height: 300px;
    }

    p input {
        width: 250px;
        margin-left: 10px;
    }

    h3 {
        font-size: 25px;
        font-weight: 700;
        text-transform: capitalize;

    }

    .formdk {
        margin: 15% 0px;
    }

    .tim {
        margin-left: 40px;
    }

    .timkiem {
        background: rgb(19, 170, 84);
        color: black;
        height: 30px;

    }

    .gia {
        font-size: 22px;
        font-weight: 600;
        color: #A18A68;
    }

    .c:hover .b {
        display: block;
    }

    .b {
        /* padding: 40px; */
        position: absolute;
        /* padding-left: 70px; */
        display: none;
        z-index: 3;
        top:100px;
        right: 200px;
       
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        border-radius: 5px;
    }
    .b p a{
        text-decoration: none;
    }

    .c {
        display: flex;
    }
</style>

<body>
    <div class="container">
        <?php
        session_start();
        ?>

        <header>
            <div class="logo">
                <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="lienhe.php">Liên Hệ </a></li>
                    <li><a href="donHangdaMua.php">Đơn Hàng </a></li>
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
                    echo '<div class="c"><img class="a" src="../image/' . $_SESSION['image'] . '" alt=""><p>' . $_SESSION['email'] . '</p>
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

        $query = "SELECT * FROM categoryid";
        $categoryidList = getAll($query);
        ?>
        <!-- tìm kiếm -->
        <?php

        if (empty($_GET["id"])) {
            $query = "SELECT * FROM products";
            $productList = getAll($query);
        } else {
            $id = $_GET["id"];

            $query = "SELECT * FROM products WHERE class = $id";
            $productList = getAll($query);
        }
        

        ?>  

        <div class="slide">
            <!-- Danh mục -->
            <?php if (empty($_POST["search"])) {
                $sanpham = "SELECT * FROM products";
                $productList = getAll($query);
            } else {
                $search = $_POST["search"];
                $sanpham = "SELECT * FROM products WHERE name LIKE '%$search%'";
                $productList = getAll($sanpham);
            }
           ?>

            <div class="loai">
                <div class="formdk">
                    <form action="./sanpham.php" method="POST">

                        <input type="text" name="search" class="tim">
                        <input type="submit" value="Tìm kiếm" class="timkiem">
                    </form>

                </div>
                <br>
                <hr>
                <?php foreach ($categoryidList as $item) : ?>
                    <div class="loai1">
                        <h2>
                            <a href="./sanpham.php?id=<?= $item["iddm"] ?>"><?= $item["namee"] ?></a>
                        </h2>
                    </div>
                <?php endforeach ?>


            </div>

            <!-- Sản phẩm -->
            <div class="sanpham">
                <?php foreach ($productList as $item1) : ?>
                    <div class="sanpham1">

                        <a href="./chiTietSanPham.php?id=<?= $item1["id"] ?>"><img src="<?= "../image/" . $item1["image"] ?>" alt=""> </a>
                        <h3>
                            <?= $item1["name"] ?>
                        </h3>
                        <p>
                            <?= $item1["descrtiption"] ?>
                        </p>
                        <span class="gia">
                            <?= "$" .  $item1["price"]  ?>
                        </span>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
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