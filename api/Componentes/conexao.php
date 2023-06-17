<?php
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=bd_zoo;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
?>
