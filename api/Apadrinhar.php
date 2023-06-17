<!DOCTYPE html>
<html>
    <head>
        <title>Apadrinhar</title>
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
            <iframe class="imagem-video-grande" src="https://www.youtube.com/embed/yEMAnpHoFQo" frameborder="0" allowfullscreen></iframe>
        </div>
        
        
        <div class="centro-pagina">
            <h1 class="titulo">Apadrinhar um Animal</h1>
            <p class="descricao">
                Hoje em dia faz parte das prioridades dos Zoos de todo o mundo cooperarem entre si para a preservação de 
                espécies em vias de extinção.
            </p>
            <p class="descricao">
                Ao apadrinhares um animal do Jardim Zoológico, irás contribuir para um projeto mundial de 
                conservação, ao mesmo tempo que acompanhas o seu crescimento. 
            </p>
            <p class="descricao">
                A tua contribuição vai ajudar na manutenção e bem-estar do
                animal escolhido. Faz parte da família selvagem do Zoo!
            </p>
            <div class="espacamento-2"></div>
            <div class="classe-animal-2">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img-2 imagem-classes-4" style="background-image: url('Imagens/lateral-kits.jpg')">
                        </td>
                        
                        <th class="espaco-classes-h2-2 padrao-riscas">
                            <a class="descricao-encima-imagem">
                                A tua contribuição vai ajudar na manutenção da instalação do teu afilhado e na conservação da sua espécie!<br>
                                Faz parte da família selvagem do Zoo!
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="espacamento"></div>
            
            <button class="accordion">Apadrinhamento Particular</button>
            <div class="panel">
                <p>
                    Faz parte da família selvagem do Zoo durante <b>1 ano</b> e torna-te um padrinho orgulhoso, no final deste período renova 
                    o teu apadrinhamento!  Juntos, vamos levar a cabo a missão de conservação das espécies. Escolhe o apadrinhamento que
                    mais te convém entre as 4 opções disponíveis:  <b>S, M, L, XL</b>
                </p>
                <p>
                    <b>Apadrinhamento S</b><br>
                    - Diploma Padrinho Orgulhoso<br>
                    - Cartão do Afilhado<br>
                    - Um bilhete de entrada no Jardim Zoológico<br>
                    <b>60 €</b>
                </p>
                <p>
                    <b>Apadrinhamento M</b><br>
                    - Diploma Padrinho Orgulhoso<br>
                    - Cartão do Afilhado<br>
                    - Um bilhete para o Jardim Zoológico<br>
                    - Mochila (b)<br>
                    <b>70 €</b>
                </p>
                <p>
                    <b>Apadrinhamento L</b><br>
                    - Diploma Padrinho Orgulhoso<br>
                    - Cartão do Afilhado<br>
                    - Um bilhete para o Jardim Zoológico<br>
                    - Peluche (a)<br>
                    <b>80 €</b>
                </p>
                <p>
                    <b>Apadrinhamento XL</b><br>
                    - Diploma Padrinho Orgulhoso<br>
                    - Cartão do Afilhado<br>
                    - Dois bilhetes para o Jardim Zoológico<br>
                    - Peluche do Afilhado (a) e mochila (a)<br>
                    <b>100 €</b>
                </p>
                <p>
                    <b>Benefícios no Jardim Zoológico</b><br>
                    - Nome no mural dos Padrinhos<br>
                    - Participação no dia especial dedicado aos Padrinhos<br>
                    - 10% de desconto na inscrição nos programas de férias (c)<br>
                    - 10% de desconto nas festas de aniversário (c)<br>
                    - 15% de desconto no bilhete de entrada (c)<br>
                    - 20% de desconto nas lojas oficiais (c)<br>
                </p>
            </div>
            <button class="accordion">Apadrinhamento de Grupo</button>
            <div class="panel">
                <p>
                    Faz parte da família selvagem do Zoo durante <b>1 ano</b>, no final deste período renova o teu apadrinhamento!<br>
                    Juntos, vamos levar a cabo a missão de conservação das espécies.
                </p>
                <p>
                    <b>Apadrinhamento de Grupo</b><br>
                    - Diploma de Padrinho Orgulhoso<br>
                    - Cartão do Afilhado em nome do grupo ou da turma<br>
                    <b>100 €</b>
                </p>
                <p>
                    <b>Benefícios</b><br>
                    - Nome no mural do Padrinhos<br>
                    - Oferta de um programa "Zoo vai à escola - Skype in the classroom"<br>
                    - Participação no dia especial dedicado aos Padrinhos com oferta de dois convites para o Zoo
                </p>
            </div>
            <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>
        </div>
        
        <div class="espacamento"></div>
        
        <?php
            include 'Rodape.php';
        ?>
        
    </body>
</html>
