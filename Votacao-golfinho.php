<!DOCTYPE html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Votação do Golfinho</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="css/caixas-texto.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'Menu.php';
        ?>
        
        <div class="imagem-inicial-grande">
            <img class="imagem-video-medio" src="Imagens-Paginas/golfinho.jpg" alt=""/>
        </div>
        
        <div class="centro-pagina">
            <h1 class="titulo-2">Votação, escolha o nome para a nova cria de Golfinho!</h1>
            <p class="descricao">
                O Jardim Zoológico apresenta um dos seus mais recentes habitantes – uma cria de Golfinho-roaz (Tursiops 
                truncatus). Este pequeno macho nasceu durante a madrugada do dia 28 de janeiro e enfrentou logo nas primeiras horas de vida,
                desafios dignos de super-herói, com a difícil tarefa de mamar debaixo de água, enquanto nada. 
            </p>
            <p class="descricao">
                Ao longo de um mês, o Jardim Zoológico promove uma votação para a escolha do nome desta pequena cria. Tejo, Arade e Troia, 
                são os três nomes em votação e que representam as áreas de distribuição da espécie em Portugal.
            </p>
            <p class="descricao">
                A crescente degradação do habitat devido à poluição, o consumo insustentável de pescado e o aprisionamento em redes de pesca são as principais ameaças
                à sobrevivência do Golfinho-roaz. O desaparecimento dos Roazes do Sado constituiria uma grave perda para o ecossistema do qual 
                fazem parte, e para a biodiversidade à escala nacional. Esta é considerada uma população estuarina única.
            </p>
            <div class="espacamento-2"></div>
            
            <table class="tabela-completa">
                <tr>
                    <th class="texto-grafico">Tejo</th>
                    <td class="barra-1"></td>
                    <th class="texto-grafico">50%</th>
                </tr>
                <tr>
                    <th class="texto-grafico">Arade</th>
                    <td class="barra-2"></td>
                    <th class="texto-grafico">10%</th>
                </tr>
                <tr>
                    <th class="texto-grafico">Troia</th>
                    <td class="barra-3"></td>
                    <th class="texto-grafico">40%</th>
                </tr>
            </table>
            
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
    </body>
</html>

