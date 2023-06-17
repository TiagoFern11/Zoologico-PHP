<?php
$con="mysql:dbname=bd_zoo;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
$pdo=new PDO($con,$dbuser,$dbpass);
$sql="SELECT * FROM animal WHERE Classe LIKE '".$_GET["classe"]."'";
$result=$pdo->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_GET["classe"];?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'Menu.php';
        ?>
        
        <div class="espacamento"></div>
                
        <div class="centro-pagina">
            <h1 class="titulo"><?php echo $_GET["classe"];?></h1>
            
            <table class="tabela-imagens">
                <?php
                foreach ($result->fetchAll() as $row)
                {
                    //$idanimal=$row["Id-animal"];
                    //echo "<tr>";
                    //echo "<td>".$row["nome"]."</td>";
                    //echo '<td style="text-align:center"><a href="visualizar.php?codproduto='.$codproduto.'"><img src="../icones/icon_visua.png"></a></td>';
                    //echo '<td style="text-align:center"><a href="edita.php?codproduto='.$codproduto.'"><img src="../icones/icon_editar.png"></a></td>';
                    //echo '<td style="text-align:center"><a onclick="confirmdel(this);return false;" href="elimina.php?codproduto='.$codproduto.'"><img src="../icones/icon_delete.png"></a></td>';
                    //echo "</tr>";
                    
                    $idanimal=$row["Id_animal"];
                    echo '<tr>';
                    echo '<td class="tabela-imagens-espacos">';
                        echo  '<div class="imagem-tabela-container">';
                            echo '<a href="Animal.php?id_animal='.$idanimal.'">';
                                echo '<img class="imagem-tabela-imagens" alt="" src="'.$row["Miniatura"].'">';
                                echo '<div class="imagem-tabela-texto">'.$row["Nome"].'</div>';
                            echo '</a>';
                        echo '</div>';
                    echo '</td>';
                    echo "</tr>";
                }

                ?>
                <!--<tr>
                    <td class="tabela-imagens-espacos">
                        <div class="imagem-tabela-container">
                            <a href="Paginas-Animais/Coelho-Bravo.html">
                                <img class="imagem-tabela-imagens" alt="" src="Animais/coelho-bravo/coelho-bravo.jpeg">
                                <div class="imagem-tabela-texto">Coelho-Bravo</div>
                            </a>
                        </div>
                    </td>-->
                
                <!--
                    <td class="tabela-imagens-espacos">
                        <div class="imagem-tabela-container">
                            <a href="Paginas-Animais/Imapala-face-negra.html">
                                <img class="imagem-tabela-imagens" src="Animais\impala-face-negra\impala-da-face-negra-mini.jpg" alt=""/>
                                <div class="imagem-tabela-texto">Impala de Face Negra</div>
                            </a>
                        </div>
                    </td>
                    <td class="tabela-imagens-espacos">
                        <div class="imagem-tabela-container">
                            <a href="Paginas-Animais/Suricata.html">
                                <img class="imagem-tabela-imagens" alt="" src="Animais/suricata/suricata-1.jpg">
                                <div class="imagem-tabela-texto">Suricata</div>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="tabela-imagens-espacos">
                        <div class="imagem-tabela-container">
                            <a href="Paginas-Animais/Capivara.html">
                                <img class="imagem-tabela-imagens" src="Animais/Capivara/capivara2.jpg" alt=""/>
                                <div class="imagem-tabela-texto">Capivara</div>
                            </a>
                        </div>
                    </td>
                    
                    <td>
                        
                    </td>
                    
                    <td>
                        
                    </td>
                </tr>-->
            </table>
            
            <div class="espacamento-grande"></div>
            
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
    </body>
</html>