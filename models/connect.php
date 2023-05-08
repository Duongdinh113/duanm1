<?php
    function connect($query){ 
        $connection = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8","root","");
        $stmt = $connection -> prepare($query);
        $stmt -> execute(); 
        return $stmt; 
    }
    function getOne($query){
        $data = connect($query) -> fetch();
        return $data; 
    }
    function getAll($query){ 
        $data = connect($query) -> fetchAll();
        return $data; 
    }
?>