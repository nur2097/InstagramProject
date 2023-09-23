<?php
require_once("connect.php");
session_start();
ob_start();

//$userId = $_GET["id"];
$password = $_POST["password"];
$username = $_POST["username"];


$sorgu = $pdo->prepare("SELECT * FROM info WHERE password=? AND username=?");
$sorgu->execute([$password, $username]);
$sorguSayisi = $sorgu->rowCount();
$sorguKayit = $sorgu->fetchAll(PDO::FETCH_ASSOC);

if($sorguSayisi > 0){
    Header("Location:http://localhost/MyDers1/InstagramProjesi/userList.php");
    exit();
}else{
    echo "Kullanıcı Adı, Telefon Numarası veya Şifreyi Hatalı Girdiniz!";
}

ob_flush();
ob_clean();

?>