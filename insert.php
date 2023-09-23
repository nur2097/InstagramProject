<?php
require_once ("connect.php");


$email = $_POST["email"];
$number = $_POST["number"];
$nameSurname = $_POST["name_surname"];
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "INSERT INTO info (email, number, name_surname, username, password) VALUES (?, ?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$result = $query->execute([$email, $number, $nameSurname, $username, $password]);

if($result){
    Header("Location:http://localhost/MyDers1/InstagramProjesi/userList.php");
    exit();
}else{
    Header("Location:http://localhost/MyDers1/InstagramProjesi/registerForm.php");
    exit();
}

?>