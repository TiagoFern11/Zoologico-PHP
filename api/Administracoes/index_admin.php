<?php
session_start();
$sessao=$_SESSION["Nome"];
$con="mysql:dbname=bd_zoo;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$sql="select * from animal";
$result=$pdo->query($sql);
?>
<script>
    function confirmdel(a)
    {
        var j=confirm('Confirma que quer eliminar?');
        if(j)
            window.location=a.attr("href");
    }
</script>
<html>
    <head>
        <title>Novidades</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="../css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include "../Componentes/__Menu.php";
            if($sessao!=null){
        ?>
        <div class="centro-pagina">
        <div class="espacamento"></div>
        <div class="espacamento"></div>
        <?php echo "Bem-vindo, ".$sessao;?>
        <div class="tabela-completa-2">
            <a class="borda-fundo" href="AdicionarAnimal.php"style=" color:#333">Registar novo</a>
            <a class="borda-fundo" target="_blank" href="Imprimir.php" style=" color:#333; margin-left: 20px;">Imprimir</a>
        </div>
        <div class="espacamento-2"></div>

        <table class="tabela-completa-2">
            <tr class="borda-fundo">
                <th width="70%">Animal</th>
                <th class="coluna-meio">Visualizar</th>
                <th class="coluna-meio">Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            foreach ($result->fetchAll() as $row)
            {
                $id_animal=$row["Id_animal"];
                echo "<tr class='linha-meio'>";
                echo "<td>".$row["Nome"]."</td>";
                echo '<td class="coluna-meio"><a href="../Animal.php?id_animal='.$id_animal.'"><img src="../Icons/icon_visua.png"></a></td>';
                echo '<td class="coluna-meio"><a href="AlterarAnimal.php?id_animal='.$id_animal.'"><img src="../Icons/icon_editar.png"></a></td>';
                echo '<td style="text-align:center"><a onclick="confirmdel(this);return false;" href="Eliminar_2.php?id_animal='.$id_animal.'"><img src="../Icons/icon_delete.png"></a></td>';
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        <?php
        }
        else{
            echo "<div class='espacamento-2'></div>";
            echo "<div class='espacamento-2'></div>";
            echo "<a class='titulo-2'>Apenas Administradores!</a>";
            echo "<div class='espacamento-grande'></div>";
        }
            include "../Componentes/__Rodape.php";
        ?>
    </body>
</html>