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
      <form action="../control/control_dK.php" method="POST" enctype="multipart/form-data">
        <h2 class="mt-[127px] uppercase font-bold text-3xl text-center">Đăng kí</h2>
        <div class="mt-[126px]">
          <div class="mt-[40px] border-b-2 border-[#D8D8D8]">
            
            <input name="username" id="username" required="" class="w-full p-2" type="text" placeholder="Họ và tên">
          </div>
          <div class="mt-[40px] border-b-2 border-[#D8D8D8]">
            
            <input name="email" id="email" required="" class="w-full p-2" type="email" placeholder="Email">
          </div>
          <div class="mt-[40px] border-b-2 border-[#D8D8D8]">
            
            <input name="avatar" class="w-full p-2" type="file">
          </div>
          <div class=" border-b-2 border-[#D8D8D8]">

            <input name="password" id="password" type="password" required="" class="mt-[46px] w-full p-2" placeholder="Mật khẩu mới">
          </div>
            </div>
            
            <button type="submit" name="register" id="register" class="mt-[60px] ml-[50px] text-[#FFFFFF] bg-[#D93240] text-sm font-bold w-[300px] h-[40px] text-center rounded ">Đăng ký</button>
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