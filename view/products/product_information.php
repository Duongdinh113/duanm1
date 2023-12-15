<?php session_start() ?>
<style>
    .thongtin {
        max-width: 500px;
        background-color: rgb(223, 242, 236);
        height: 500px;
        margin: 10% auto;

    }
    h1{
        text-align: center;
    }

    input {
        width: 400px;
        height: 30px;
    }

    .tt {
        margin-left: 10%;
        padding-top: 50px;
    }

    button {
        margin-top: 10%;
        width: 200px;
        height: 40px;
        border-radius: 5px;
        margin-left: 20%;
        background: rgb(27, 27, 26);
        color: white;
        font-size: 25px;
    }
</style>
<div class="thongtin">
    <div class="tt">
        <h1> THÔNG TIN </h1>
        <form action="../control/control_add_bill.php" method="POST">
            <div>
                <input type="text" hidden value="<?php echo $_POST['ip_p']?>" name="idsp" id="">
                <input type="text" hidden value="<?php echo $_SESSION['id'] ?>" name="id" id="">
                <p for="">Số điện thoại</p>
                <input type="text" name="sdt" id="">
                <p for="">Họ và tên</p>
                <input type="text" name="name" id="">
                <p for="">địa chỉ</p>
                <input type="text" name="diachi" id="">
                <p for="">Tổng tiền</p>
                <input type="text" value="<?php echo $_POST['price']?>" name="tongTien" id="">
                <input type="text" hidden value="<?php echo $_POST['number']?>" name="number" id="">
            </div>
            <button>mua</button>
        </form>
    </div>
</div>
