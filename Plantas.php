<!DOCTYPE html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Plantas</title>
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
            <h1 class="titulo">Plantas</h1>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Plantas-Aquaticas.html">
                                <img class="imagem-classes" src="Plantas/plantas-aquaticas.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Aquaticas</a><br>
                            <a href="Tabela-Plantas-Aquaticas.html" class="botao-classes">Saber mais</a>
                        </th>
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Terrestres</a><br>
                            <a href="Tabela-Plantas-Terrestres.html" class="botao-classes">Saber mais</a>
                        </th>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Plantas-Terrestres.html">
                                <img class="imagem-classes" src="Plantas/Estrelicia/topo1.jpg" alt=""/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Plantas-Arvores.html">
                                <img class="imagem-classes" src="Plantas/Romazeira/topo4.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Árvores</a><br>
                            <a href="Tabela-Plantas-Arvores.html" class="botao-classes">Saber mais</a>
                        </th>
                    </tr>
                </table>
            </div>
            
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
        
    </body>
</html>

