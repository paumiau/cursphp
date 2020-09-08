<?php
session_start();
$email='paumiau@gmail.com';
$username='paumiau';
$password='12345';

if ($_GET['email']==$email and $_GET['password']==$password){
    $_SESSION["username"]=$username;
    header('location:main.php');
}else{
    header('location:login.php?m=1');
}
?>