<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/layout.css">
    <title>Indext</title>
    <link rel="stylesheet" href="../lib/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="../lib/owl/owl.carousel.min.css">
</head>
<style>
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
    .c:hover .b {
        display: block;
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
    .b{
        background-color: white;
    }
    .header{
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="container">
        <?php
        session_start();
        ?>
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
        <div class="slideshow owl-carousel owl-theme">
            <img id="slide" src="./slideshow/1.jpg" alt="" width="100%" height="500px" id="anh">
            <img id="slide" src="./slideshow/2.jpg" alt="" width="100%" height="500px" id="anh">
            <img id="slide" src="./slideshow/3.jpg" alt="" width="100%" height="500px" id="anh">
        </div>
        <!-- <script>
            var arr_slide = [
                "./slideshow/1.jpg",
                "./slideshow/2.jpg",
                "./slideshow/3.jpg"
            ]
            var index = 1;

            function Next() {
                index++;
                if (index >= arr_slide.length) index = 1;
                var slide = document.getElementById("slide");
                slide.src = arr_slide[index];
            }
            setInterval("Next()", 4000);
        </script> -->

        <div>
            <div class="banner">
                <div class="tieude">
                    <div class="dis">
                        <button>cosmetic quality</button>
                    </div>

                    <div class="chude">
                        <h1>Fastest Delivery & Easy Pickup</h1>
                    </div>

                    <p>The place where the world's most prestigious and quality brands are gathered</p>
                    <div class="check">
                        <form action="" method="post">
                            <input type="text" name="noidung" placeholder="Enter your delivery location">
                            <button type="submit" name="btn">Discover</button>
                        </form>

                    </div>

                </div>
                <div class="anhmh">
                    <div class="pic">
                        <img id="slide" src="image/anh1.1_1.png" alt="">
                    </div>
                    <p class="left" onclick="Prev()" id="but1"></p>
                    <p class="right" onclick="Next()" id="but2"></p>
                </div>
            </div>

            <div class="item">
                <div class="item1">
                    <h2>Categories</h2>
                    <button>View All Categories</button>
                </div>
                <div class="item2">
                    <div class="item2-1">
                        <img src="./image/1.jpg" alt="">
                        <h3>Ring</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/2.jpg" alt="">
                        <h3>Necklace</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/3.jpg" alt="">
                        <h3>Earring</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/4.jpg" alt="">
                        <h3>Clock</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/5.jpg" alt="">
                        <h3>Bracelet</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/6.jfif" alt="">
                        <h3>Anklet</h3>
                    </div>
                </div>
            </div>
        </div>


        <h2>TOP SẢN PHẨM HOT</h2>
        <?php

        require '../models/connect.php';
        $query = "SELECT * FROM products";
        $productList = getAll($query);
        //  echo "<pre>";
        //  var_dump($productList);die;


        ?>




        <div>
            <div class="product mr">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="trangchu">
                        <div class="div">
                            <a href="" class="anh"><img src="<?= " ../image/" . $productList[$i]["image"] ?>"></a>
                            <a href="./sanpham.php" class="buynow">THÔNG TIN</a>
                        </div>

                        <div class="boxs">
                            <h3>
                                <?= $productList[$i]["name"] ?>
                            </h3>
                            <p>
                                <?= $productList[$i]["descrtiption"] ?>
                            </p>
                            <span>
                                <?= $productList[$i]["price"] . "$" ?>
                            </span>
                        </div>
                    </div>
                <?php endfor ?>

            </div>

        </div>
        <div class="showadd mr">
            <h1>Show more</h1>
            <div class="tips">
                <div class="tips-box mr">
                    <img width="300px" src="image/4.jpg" alt="">
                    <p>How to create a living room to love</p>
                    <p>20 jan 2020</p>
                </div>
                <div class="tips-box mr">
                    <img  width="300px" src="image/2.jpg" alt="">
                    <p>Solution for clean look working space
                    </p>
                    <p>10 jan 2020</p>
                </div>
                <div class="tips-box mr">
                    <img  width="300px" src="image/1.jpg" alt="">
                    <p class="font-bold">Make your cooking activity more fun with good setup</p>
                    <p>20 jan 2020</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../lib/owl/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>
    
</body>

</html>