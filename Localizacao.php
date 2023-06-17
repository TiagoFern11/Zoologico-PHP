<!DOCTYPE html>
<html>
    <head>
        <title>Bilheteira</title>
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
            <h1 class="titulo">Localizacão do Zoológico</h1>
            <div class="espacamento-3"></div>
            <div class="centro-pagina">
                
                <a class="descricao caixa-grande azul">
                    <p class="descricao texto-escuro">
                        <b>Morada</b>
                    </p>
                    <p class="descricao texto-escuro">
                        Quinta do Rebentão<br>
                        Vila Nova da Veiga<br>
                        5400-764 São Pedro de Agostém
                    </p>
                </a>
                <a class="descricao caixa-grande castanho">
                    <p class="descricao texto-escuro">
                        <b>Contacto</b>
                    </p>
                    <p class="descricao texto-escuro">
                        Jardim Zoológico<br>
                        Centro de Apoio ao Visitante<br>
                        Tel: 217 232 910
                    </p>
                </a>
                
                <div class="imagem-inicial-grande">
                    <iframe class="imagem-video-grande" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5463.15120304892!2d-7.498536842764422!3d41.70316521249613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3adf5b0bf33dc1%3A0x84d267e900ed0cfa!2sParque%20Bot%C3%A2nico%20e%20Zool%C3%B3gico%20da%20Quinta%20do%20Rebent%C3%A3o!5e0!3m2!1spt-PT!2spt!4v1590948036660!5m2!1spt-PT!2spt" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
    </body>
</html>