<?php
$con="mysql:dbname=bd_zoo;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
?>
<style>
input[type=text], input[type=password] { 
    width: 100%; 
    margin: 8px 0;
    padding: 12px 20px; 
    display: inline-block; 
    border: 2px solid green; 
    box-sizing: border-box; 
}
button:hover { 
    opacity: 0.7; 
}
</style>
<!DOCTYPE html>
<html>
    <head>
        <title>Our Zoo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="../css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include '../Componentes/__Menu.php';
        ?>
        <div class="espacamento"></div>
        <div class="espacamento"></div>
        <div class="container">
            <a class="titulo">Login</a>
            <form action="logincheck.php" method="post">
                Utilizador
                <input type="text" name="utilizador" required/><br>
                Password
                <input type="password" name="password" required/><br>
                <center><button class="botao-classes" type="submit" value="Entrar">Entrar</button></center>
            </form>
        </div>
        <?php
            include '../Componentes/__Rodape.php';
        ?>
    </body>
</html>
