<!DOCTYPE html>
<html>
    <head>
        <title>Animais</title>
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
            <h1 class="titulo">Animais</h1>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Animais-Mamiferos.php?classe=Mamíferos">
                                <img class="imagem-classes" src="Animais/441761.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Mamíferos</a><br>
                            <a href="Tabela-Animais-Mamiferos.php?classe=Mamíferos" class="botao-classes">Saber mais</a>
                        </th>
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Aves</a><br>
                            <a href="Tabela-Animais-Mamiferos.php?classe=Aves" class="botao-classes">Saber mais</a>
                        </th>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Animais-Mamiferos.php?classe=Aves">
                                <img class="imagem-classes" src="Animais/Araçari Verde/zoo-ara_ari-verde.jpg" alt=""/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Animais-Mamiferos.php?classe=Répteis">
                                <img class="imagem-classes" src="Animais/hidrossauro-das-filipinas/hidrossauro-das-filipinas.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Repteis</a><br>
                            <a href="Tabela-Animais-Mamiferos.php?classe=Répteis" class="botao-classes">Saber mais</a>
                        </th>
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Peixes</a><br>
                            <a href="Tabela-Animais-Mamiferos.php?classe=Peixe" class="botao-classes">Saber mais</a>
                        </th>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Animais-Mamiferos.php?classe=Peixe">
                                <img class="imagem-classes" src="Animais/fish-2921430_1280.jpg" alt=""/>
                            </a>
                        </td>
                        
                    </tr>
                </table>
            </div>
            
            <div class="classe-animal">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img">
                            <a href="Tabela-Animais-Mamiferos.php?classe=Anfíbio">
                                <img class="imagem-classes" src="Animais/ra-tomate/ra-tomate-1.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2">
                            <a class="nome-classe">Anfíbios</a><br>
                            <a href="Tabela-Animais-Mamiferos.php?classe=Anfíbio" class="botao-classes">Saber mais</a>
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

