<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/layout.css">
    <title>GIẢM GIÁ</title>
</head>
<style>
    .box {
        margin: 50px 0px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        border-radius: 5px;
        gap: 25px;
        background-color: #F4F4F4;
        padding: 15px 15px;
    }

    .dell {
        /* width: 500px; */
        /* margin-top: 10%;
        height: 600px; */
        border-radius: 15px;
        background-color: white;
    }

    .dell img {
        margin: 10px 10px;
        width: 94%;
        height: 300px;
    }

    h3 {
        text-align: center;
        font-size: 25px;
        font-weight: 700;
        text-transform: capitalize;
    }
    .dell p{
    padding-left: 30px;
    }
    .dell del {
        padding: 0px 10px 30px 30px;
    }
    .dell h4 {
        padding: 0px 10px 30px 30px;
        font-size: 25px;
    }

    del {
        color: red;
        font-size: 30px;
        font-weight: 500;
    }

    h3 {
        font-size: 25px;
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

    .a {
        width: 50px;
        border-radius: 50%;
        border: 0.1875em solid #0F1C3F;
        height: 50px;
    }
    .tieude{
        padding-top: 100px;
        text-align: center;
    }
    .tieude h2 {
        background-color: #F4F4F4;
        padding: 10px 10px;
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
        $query = "SELECT * FROM products WHERE deal";
        $productList = getAll($query);
        ?>
        <div class="flex justify-center">
            <div>
                <div class="tieude">
                <h2>SALE KHUYẾN MÃI SỐC</h2>
                </div>
                <div class="box">
                    
                    <?php foreach ($productList as $item1) : ?>
                        <div class="dell">
                            <img src="<?= "../image/" . $item1["image"] ?>" alt="">
                            <h3><?= $item1["name"] ?></h3>
                            <p><?= $item1["descrtiption"] ?></p>
                            <del><?= $item1["price"] . "$" ?></del>
                            <h4 class=""><?= $item1["deal"] . "$" ?></h4>
                        </div>
                    <?php endforeach ?>
                </div>
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