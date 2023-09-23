<?php
require_once("connect.php");

$userId = @$_GET["id"];

$sql = "DELETE FROM info WHERE id = ?";
$sorgu = $pdo->prepare($sql);
$sorguKayit = $sorgu->execute([$userId]); 

if($sorguKayit){
    Header("Location:http://localhost/MyDers1/InstagramProjesi/userList.php");
    exit();
}else{
    Header("Location:http://localhost/MyDers1/InstagramProjesi/registerForm.php");
    exit();
}

?>