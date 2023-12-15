<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
</head>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          dmSans: "'DM Sans', sans-serif",
        }
      }
    }
  }
</script>

<body>
  <!-- wrapper -->
  <div class="font-dmSans mx-auto mt-10 max-w-[1500px]">
    <div class="absolute left-[500px] top-[550px] text-[red]">
    <?php 
    session_start(); // bật công tắc để các dữ liệu được liên kết với nhau 
    /*
        session là một phiên làm việc giữa client và server 
        Một session bắt đầu khi client gửi request đến server, 
        nó tồn tại xuyên suốt từ trang này đến trang khác trong 
        ứng dụng web và chỉ kết thúc khi hết thời gian timeout 
        hoặc khi bạn đóng ứng dụng. 
        Giá trị của session sẽ được lưu trong biến $_SESSION
    */
    require "../models/connect.php";

    $query = "SELECT * FROM users"; //câu lệnh lấy toàn bộ dữ liệu từ bảng users trong DB
    $use = getAll($query); //thực hiện lấy dữ liệu và gán cho biến $use

    $check = 0;
    foreach($use as $suv){ //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
        if(isset($_POST["btn"])){ //kiểm tra xem button login đã được ấn hay chưa
            if(!$_POST["email"] == "" && !$_POST["pass"] == ""){ // kiểm tra xem email và password có trống hay không
                if($_POST["email"] == $suv["email"] && $_POST["pass"] == $suv["password"]){ //kiểm tra xem email và password nhập vào có trùng trong db k
                    $_SESSION["email"] = $_POST["email"]; // nếu khớp dữ liệu trong db thì gán dữ liệu email vào session thông qua key là email
                    if($suv["role"]=="1"){
                        $_SESSION["user"]= $suv["user"];
                        $_SESSION["id"]=$suv["id"];
                        $_SESSION["image"]=$suv["image"];
                        header("location:../view/admin/dashboard.php");
                    }else{
                        $_SESSION["user"]=$suv["user"];
                        $_SESSION["id"]=$suv["id"];
                        $_SESSION["image"]=$suv["image"];
                        header("location:./index.php");
                    } 
                }else{
                    $check = 1;
                }
            }
        
        }
    }
    if($check == 1){
        echo "sai tài khoản hoặc mật khẩu";
        
       
    }

?>
</div>
    <!-- header -->
    <div class="mx-7 flex justify-between">
      <div>
        <a href=""><img src="image/logo_1.1.png" alt=""></a>
      </div>
      <div class="flex">
        <ul class="flex mr-4">
          <a href="">
            <li class="mr-14">Shop</li>
          </a>
          <a href="">
            <li class="mr-14">Blog</li>
          </a>
          <a href="">
            <li class="mr-14">Our Story</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="mt-10 mx-7 border-b-[1px] border-[#D8D8D8]"></div>
    <!-- main -->
    <div class="flex items-center justify-center ">
      <form action="./dangNhap.php" method="POST">
        <h2 class="mt-[127px] uppercase font-bold text-3xl text-center">Đăng nhập</h2>
        <div class="mt-[126px]">
          <div class="border-b-2 border-[#D8D8D8]">
            
            <input name="email" required="" class="w-full p-2" type="email" placeholder="Email">
          </div>
          <div class="border-b-2 border-[#D8D8D8]">

            <input name="pass" required="" class="mt-[46px] w-full p-2" type="password" placeholder="Password">
          </div>
        </div>
        <button name="btn" type="submit" class="mt-[69px] bg-black w-[500px]  hover:bg-slate-900"><p class="text-white p-3 font-bold text-base">Đăng nhập </p></button>
       <a href="./forgotPassword.php"><p class="mt-[20px] text-center mt-[13px]">Quên mật khẩu ?</p></a>
       <!-- <button type="submit" class="mt-[59px] bg-rose-800 w-[300px] ml-[100px] hover:bg-slate-900"><p class="text-white p-3 font-bold text-base">Tạo tài khoản mới</p></button> -->
       <a href="./dangKi.php">
   <p class="mt-[50px] mb-[30px] bg-rose-800 w-[300px] ml-[100px] hover:bg-slate-900 text-white p-3 font-bold text-base text-center">Tạo tài khoản mới</p>
    </a>
      </form>
    </div>
    <!-- footer -->
    <div class="mt-[247px] mx-7 mb-[82px] border-t-[1px] border-[#D8D8D8]">
     
        <div class="flex justify-between mt-[48px]">
          <div>
            <p class="font-normal text-base text-[#707070]"> <span class="text-black">© 2021 Shelly</span> Terms of use <span class="text-black">and</span> privacy policy.</p>
          </div>
          <div class="flex">
            <a href=""><img src="../images/Icon color (2).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (3).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (5).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (6).png" alt=""></a>
          </div>
        </div>
    </div>
  </div>
</body>

</html>