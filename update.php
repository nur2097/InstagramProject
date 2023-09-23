<?php
require_once("connect.php");

$userId = @$_GET["id"];

$email = @$_POST["email"];
$number = @$_POST["number"];
$nameSurname = @$_POST["name_surname"];
$username = @$_POST["username"];
$password = @$_POST["password"];

$sorgu = "UPDATE info SET email=?, number=?, name_surname=?, username=?, password=? WHERE id = ?";
$sorguKayit = $pdo->prepare($sorgu);
$sorguGetir = $sorguKayit->execute([$email, $number, $nameSurname, $username, $password, $userId]);

if($sorguGetir){
    Header("Location:http://localhost/MyDers1/InstagramProjesi/userList.php");
    exit();
}else{
    Header("Location:http://localhost/MyDers1/InstagramProjesi/registerForm.php?id=" . $userId);
    exit();
}

?>