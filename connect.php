<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=user;charset=UTF8", "root", "");
}catch(PDOException $e){
    echo "Hata : " . $e->getMessage();
    die();
}

?>