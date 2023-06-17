<!DOCTYPE html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Novidades</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'Menu.php';
        ?>
        
        <div class="imagem-inicial-grande">
            <img class="imagem-video-medio" src="Imagens-Paginas/golfinho.jpg" alt=""/>
        </div>
        
        <div class="centro-pagina">
            <h1 class="titulo">Novidades</h1>
            <table class="tabela-imagens">
                <tr>
                    <td class="caixa-imagem-2">
                        <img class="imagem-2" src="Imagens-Noticias/cria-golfinho-mobile.jpg" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">Conheça a mais pequena cria do Jardim Zoológico</a>
                            <a href="Paginas-Noticias/Cria-golfinho.html" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                    <td class="caixa-imagem-2">
                        <img class="imagem-2" src="Imagens-Noticias/primata-mobile-agenda.jpg" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">Vamos falar sobre Primatas, no Jardim Zoológico</a>
                            <a href="Paginas-Noticias/Primatas.html" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                    <td class="caixa-imagem-2">
                        <img class="imagem-2" src="Imagens-Noticias/wild-planet-topo-mobile.jpg" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">Receitas da Wild Planet revertem para o Jardim Zoológico</a>
                            <a href="Paginas-Noticias/Wild-Planet.html" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                </tr>
                
            </table>
            
            <div class="espacamento-grande"></div>
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
    </body>
</html>

