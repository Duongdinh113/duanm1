



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
    <div class="mr-[84px] mt-[100px]">
                <a href=""><img class="object-cover h-[560px] rounded-xl"
                        src="https://i.pinimg.com/564x/38/e9/dd/38e9ddc64bb2e284124cbf93ce4d883e.jpg" alt=""></a>
            </div>
      <form action="../control/control_forgotPassword.php" method="POST">
        <h2 class="mt-[127px] uppercase font-bold text-3xl text-center">Quên mật khẩu</h2>
        <div class="mt-[126px]">
          <div class="mt-[40px] border-b-2 border-[#D8D8D8]">
            
            <input name="email" id="email" required="" class="w-full p-2" type="email" placeholder="Email">
          </div>
          <div class="mt-[40px] border-b-2 border-[#D8D8D8]">
            
            <input name="username"  required="" class="w-full p-2" type="text" placeholder="Họ và tên">
          </div>
            </div>
        

                    <div>
                        <button type="submit" name='submit'
                            class="mt-8 text-[#FFFFFF] bg-gray-950 text-sm font-bold w-[300px] h-[40px] text-center rounded ">Submit</button>
                            <p class="mt-4 text-red-700 font-bold">
                <?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
            </p>
                    </div>
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