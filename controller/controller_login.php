
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        require "../models/connect.php";

        $query = "SELECT * FROM users";
        $use = getAll($query);
       
        
    //    var_dump($_POST);
        foreach($use as $suv){
            if(isset($_POST["btn"])){
                if(!$_POST["email"] == "" && !$_POST["pass"] == ""){
                    // var_dump($suv["Email"]);die;

                    if($_POST["email"] == $suv["Email"] && $_POST["pass"] == $suv["pass"]){
                        $_SESSION["email"] = $_POST["email"];
                        header("location:../view/admin/dashboard.php");
                    }else{
                        header("location:../viewND/dangNhap.php");
                    }
                }
              
            }
        }

    ?>
</body>
</html>
