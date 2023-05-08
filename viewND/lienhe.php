<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .lienhe {
        width: 600px;
        margin: 0 auto;
        padding-top: 5%;
    }

    h2 {
        text-align: center;
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
</style>

<body>
    <div class="container">
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
        <div class="lienhe">

            <h2>Liên hệ với chúng tôi</h2>
            
            <form action="../control/control_contact.php" method="POST" name="frmDK" onsubmit="return dk()">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Họ và tên </label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                        placeholder="nhập họ tên " required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email"  class="form-control" name="email" id="exampleFormControlInput1" placeholder="nhập email"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Nhập số điện thoại </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="sdt">
                    <p class="errSDT" style="color:red ;"></p>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Vấn đề </label>
                    <input type="text" name="vande" class="form-control" id="exampleFormControlInput1" placeholder="vấn đề "
                        required>
                </div>
                <button type="submit" class="btn btn-success">Gửi</button>



            </form>
        </div>
        <script>
            function dk() {

                var sdt = document.frmDK.sdt.value;

                var errSDT = document.querySelector(".errSDT");

                let flag = true;
                if (sdt == "") {
                    errSDT.innerHTML = "SDT không được rỗng"
                    flag = false;
                }
                else {
                    let regSDT = /^0\d{9}$/
                    if (!sdt.match(regSDT)) {
                        errSDT.innerHTML = "SDT sai định dạng"
                        flag = false;
                    }
                    else errSDT.innerHTML = ""
                }



                if (flag == true) {
                    alert("đăng ký thành công");
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
    </div>
</body>

</html>
