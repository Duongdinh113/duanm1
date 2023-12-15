
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src=".validate_change_pass.js"></script>
    
</head>
<body>
    <div class="lg:flex lg:justify-center lg:items-center lg:mt-32">
            <div class="mr-[84px]">
                <a href=""><img class="object-cover h-[560px] rounded-xl"
                        src="https://i.pinimg.com/564x/76/19/27/7619273b3112edb1953d6a020a051803.jpg" alt=""></a>
            </div>
            <form action="../control/change_password.php" method="POST">
                <div class="mt-6 ml-12 ">
                    <h1 class="font-bold text-3xl text-[#37A9CD] text-center">Đổi mật khẩu</h1>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Email
                        </p>
                        <input id="email" name="email" type="text" 
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " >
                            <h5  class="mt-[5px] text-green-900 font-bold" id="messageErrorP"></h5>

        
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Mật Khẩu hiện tại
                        </p>
                        <input id="old-pass" name="old-pass" type="password" 
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " >
                            <h5  class="mt-[5px] text-green-900 font-bold" id="messageErrorP"></h5>

        
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Mật Khẩu mới
                        </p>
                        <input id="new-pass" name="new-pass" type="password" 
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " >
                            <h5  class="mt-[5px] text-green-900 font-bold" id="messageErrorM"></h5>
        
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Nhập lại mật Khẩu mới
                        </p>
                        <input id="new-pass-retype" name="" type="password"
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " >
                            <h5  class="mt-[5px] text-green-900 font-bold" id="messageErrorN"></h5>
                    </div>
                    <div>
                        <button type="submit" name='submit' id="btn-change-pass"
                        class="mt-8 text-[#FFFFFF] bg-[#37A9CD] text-sm font-bold w-[300px] h-[40px] text-center rounded ">Đổi mật khẩu</button>
                        <h5  class="mt-[5px] text-green-900 font-bold" id="message"></h5>
                        <p class="mt-4 text-red-700 font-bold">
                <?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
            </p>
                    </div>
                </div>
            </form>

        
        </div>


</body>
</html>