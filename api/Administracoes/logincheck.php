<?php
$con="mysql:dbname=bd_zoo;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$username=$_POST["utilizador"];
$password=$_POST["password"];
$sql="select * from administrador where Utilizador='".$username."' and Palavra_passe='". md5($password)."'";
$result=$pdo->query($sql);
$n=$result->rowCount();
$row=$result->fetch();
If ($n==1) {    
    session_start();
    $_SESSION["Nome"]=$row["Nome"];
    If ($row["Cargo"]=="adm") {
      header("location:index_admin.php");
    }
    else {
      echo "Não é administrador";
    }
 }
 else {
    header("location:login.php");
 }
?>


