<?php
    require_once '../models/connect.php';

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];

        $query = "SELECT * FROM users";
        $users = getAll($query);

        if($users) {
            $msg = '';
            $check = false;
            foreach($users as $user) {
                if($user['fullname'] == $username && $user['email'] == $email) {
                    $id = $user['id'];
                    $check = true;
                    $query = "SELECT * FROM users WHERE id = $id";
                    $user_tmp = getOne($query);
                    $password = $user_tmp['password'];
                    header("location: ../viewND/forgotPassword.php?msg=$password");
                }
            }
            if(!$check) {
                $msg = 'Email hoặc username không đúng';
                header("location: ../viewND/forgotPassword.php?msg=$msg");
            }
        }
    }
?>