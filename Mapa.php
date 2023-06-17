<!DOCTYPE html>
<html>
    <head>
        <title>Mapa do Zoo</title>
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
            <img class="imagem-video-medio" src="Imagens-Paginas/orangotango.jpg" alt=""/>
        </div>
        
        
        
        <div class="centro-pagina">
            <a class="titulo">Mapa do Zoo</a>
            <p class="descricao">
                Planeie o seu dia no Jardim Zoológico com o mapa do Zoo.
                Verifique onde se encontram os nossos animais, atrações e apresentações.
            </p>
            <p class="descricao">
                No parque habitam cerca de 2000 animais
                num conjunto de aproximadamente 300 espécies, entre mamíferos, aves, répteis e anfíbios.
            </p>
        </div>
        <div class="pagina-completa">
            <div class="espaco-imagem-grande">
                <img class="imagem-grande" src="Imagens-zoo/mapa-zoo.jpg" alt=""/>
            </div>
        </div>
        <div class="centro-pagina">
            <table class="tabela-completa">
                <tr>
                    <th class="espaco-botoes-2">
                        <a href="Sugestao-visita.php">
                            <button class="butoes-azul">Sugestão de Visita</button>
                        </a>
                    </th>
                    <th class="espaco-botoes-2">
                        <a style="text-decoration: none;" target="_brank" href="Imagens/mapa-zoo.pdf">
                            <button class="butoes-azul">Download do Mapa</button>
                        </a>
                    </th>
                </tr>
            </table>
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
        
    </body>
</html>
