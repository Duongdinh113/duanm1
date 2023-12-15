<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid orange;
        }
    </style>
</head>

<body class="max-w-full m-auto">
    <?php
    session_start();
    ?>

    <div>
        <div class="flex justify-between mx-[20px] mt-5">
            <div class="">
                <!-- <img src="../../viewND/image/logo.png" alt="">
             -->
                <img src="../../viewND/image/anh" alt="">

            </div>
            <div class="flex ">
                <div class="flex">
                    <p class="mr-2">Xin chào
                    <div class="text-[#37A9CD]">
                        <?php echo $_SESSION["email"] ?>
                    </div><a href="../../control/login_out.php">

                        <button class="p-2 border-[1px] bg-[#38A169] hover:text-[white]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>


                        </button>
                    </a></p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="flex gap-5 justify-between  my-[20px]">
            <div class="border-r-[1px] border-[#CBD5E0]">
                <div class="flex mt-[24px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                    </svg>

                    <a href="dashboard.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm lg:w-[250px] lg:mt-1">
                            Dashboard</p>
                    </a>

                </div>
                <div class="flex mt-[24px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                    </svg>
                    <a href="product_management.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm lg:mt-1">Quản lý sản phẩm</p>
                    </a>

                </div>
                <div class="flex mt-[24px] ml-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    <a href="quanLi_user.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm lg:mt-1">Quản lý user</p>
                    </a>

                </div>
                <div class="flex mt-[24px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <a href="./quanLi_danhMuc.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm lg:mt-1">Quản lý danh mục</p>
                    </a>
                </div>

                <div class="flex mt-[24px] ml-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>


                    <a href="quanLi_binhLuan.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm mt-1">Quản lí bình luận </p>
                    </a>

                </div>
                <div class="flex mt-[24px] ml-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>

                    <a href="./quanLi_donHang.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm mt-1">Quản lí đơn hàng</p>
                    </a>

                </div>

                <div class="flex mt-[24px] ml-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>

                    <a href="./quanLi_lienhe.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm mt-1">Quản lí liên hệ </p>
                    </a>

                </div>
                <div class="flex mt-[24px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                    </svg>

                    <a href="thongKe.php">
                        <p class="lg:ml-[10px] lg:font-normal lg:text-[#4A4A4A] lg:text-sm mt-1">Thống kê</p>
                    </a>

                </div>
            </div>
            <div>

                <div>
                    <div>

                        <div>
                            <div class="max-w-[1000px] mr-[140px]">
                                <p class="absolute text-[white] font-bold right-[600px] top-[180px]">Thống kê</p>
                                <img class="" src="../../viewND/image/Rectangle 152.png" alt="">
                            </div>
                            <div class="">
                                <div class="my-[15px]">
                                    <form action="./thongke.php" method="POST">
                                        <div class="flex gap-2">
                                            <div>
                                                <img class="absolute pt-1 pl-1" src="../../viewND/image/Search.png"
                                                    alt="">
                                                <input class="border-[1px] border-[black] rounded pl-[30px] h-[30px]"
                                                    placeholder="Tìm kiếm" type="text" name="search">
                                            </div>
                                            <div>
                                                <button
                                                    class="p-1 border-[1px] border-[#38A169] h-[30px] rounded text-[white] font-bold bg-[#38A169]">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <table class="w-[1000px] h-[200px]">
                                    <thead>
                                        <tr class="bg-[black] h-[50px]">
                                            <th class="text-[white]">Mã Danh Mục</th>
                                            <th class="text-[white]">Tên Danh Mục</th>
                                            <th class="text-[white]">Số Lượng </th>
                                            <th class="text-[white]">Giá Cao Nhất</th>
                                            <th class="text-[white]">Giá Thấp Nhất</th>
                                            <th class="text-[white]">Giá Trung Bình</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        require "../../models/connect.php";


                                        $sql = " SELECT categoryid.iddm as maxdm, categoryid.namee as tendm, count(products.id) as countsp, MAX(products.price) as maxprice, MIN(products.price) as minprice, AVG(products.price) as avgprice FROM  categoryid JOIN products ON categoryid.iddm=products.class GROUP BY categoryid.iddm ";

                                        $listtk = getAll($sql);

                                        ?>

                                        <?php foreach ($listtk as $tk): ?>
                                            <tr>

                                                <td class="text-center">
                                                    <?php echo $tk["maxdm"] ?>
                                                </td>

                                                <td>
                                                    <?php echo $tk["tendm"] ?>
                                                </td>
                                                <td>
                                                    <?php echo $tk["countsp"] ?>
                                                </td>
                                                <td>
                                                    <?php echo $tk["maxprice"] ?>
                                                </td>

                                                <td>
                                                    <?php echo $tk["minprice"] ?>
                                                </td>

                                                <td>
                                                    <?php echo $tk["avgprice"] ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div id="piechart"></div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', { 'packages': ['corechart'] });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Loại sản phẩm');
                            data.addColumn('number', 'Số sản phẩm');

                            // Add rows to the data table using a loop
                            <?php foreach ($listtk as $tk): ?>
                                data.addRow(["<?php echo $tk["tendm"] ?>", <?php echo $tk["countsp"] ?>]);
                            <?php endforeach ?>

                            // Set chart options
                            var options = {
                                title: "Thống kê số sản phẩm theo loại",
                                pieHole: 1
                            };

                            // Instantiate and draw the chart
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }
                    </script>
                </div>


</body>

</html>