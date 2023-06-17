<?php
include '../Componentes/conexao.php';
$sql="select * from animal";
$result=$pdo->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Our Zoo</title>
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include '../Componentes/__Menu.php';
        ?>
        <div class="espacamento"></div>
        
        <a class="titulo">Lista de Animais</a>
        <div class="centro-pagina">
        <table class="tabela-completa-2">
            <tr class="borda-fundo">
                <th width="45%">Animal</th>
                <th width="50%">Imagem</th>
                <th>Visualizar</th>
            </tr>
            <?php
                foreach ($result->fetchAll() as $row)
                {
                    $id_animal=$row["Id_animal"];
                    $miniatura=$row["Miniatura"];
                    echo "<tr class='linha-meio'>";
                    echo "<td>".$row["Nome"]."</td>";
                    echo '<td><img height="180" src="../'.$miniatura.'"><td>';
                    echo '<a href="../Animal.php?id_animal='.$id_animal.'"><img width="30" src="../Icons/icon_visua.png"></a>';
                    echo "</tr>";
                }

            ?>		  
        </table>
        </div>
        <?php
            include '../Componentes/__Rodape.php';
        ?>
    </body>
</html>
