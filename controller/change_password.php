<?php
    require_once '../models/connect.php';

    if(isset($_POST['submit'])) {

        // echo '<pre>';
        // var_dump($_POST);die;
        $oldPass = $_POST['old-pass'];
        $email = $_POST['email'];
        $newPass = $_POST['new-pass'];

        $query = "SELECT * FROM users";
        $users = getAll($query);
        
        if($users) {
            $msg = '';
            $check = false;
            foreach($users as $user) {
                if($user['password'] == $oldPass && $user['email'] == $email) {
                    $check = true;
                    $id = $user['id'];
                    $query = "UPDATE `users` SET `password`='$newPass' WHERE id = $id";
                    connect($query);
                    $msg = 'Đổi mật khẩu thành công';
                    header("location: ../viewND/change_Password.php?msg=$msg");
                }
            }
            if(!$check) {
                $msg = 'Email hoặc mật khẩu không đúng';
                header("location: ../viewND/change_Password.php?msg=$msg");
            }
        }
    }
?>