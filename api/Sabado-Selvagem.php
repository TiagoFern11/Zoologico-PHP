<!DOCTYPE html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sábado Selvagem</title>
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
            <iframe class="imagem-video-grande" src="https://www.youtube.com/embed/U1lbhfP0bAo" frameborder="0" allowfullscreen></iframe>
        </div>
        
        
        <div class="centro-pagina">
            <h1 class="titulo">Sábados Selvagens</h1>
            <p class="descricao">
                Quer ter um sábado em família diferente? O Jardim Zoológico sugere os Sábados Selvagens: 
                um programa especialmente pensado para promover a aprendizagem em família, incentivando a 
                partilha de conhecimento entre adultos e crianças e propondo experiências únicas.
            </p>
            <p class="descricao">
                Nos percursos temáticos do programa visite alguns bastidores e descubra alguns dos processos 
                diários de tratamento e alimentação dos animais, bem como vários exemplos de enriquecimentos ambientais.
            </p>
            
            <div class="espacamento-2"></div>
            
            <div class="classe-animal-2">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img-2">
                            <a href="">
                                <img class="imagem-classes" src="Imagens/sabados-selvagens-lateral-2-1.jpg" alt=""/>
                            </a>
                        </td>
                        <th class="espaco-classes-h2-2">
                            <a class="descricao">Fique a conhecer os vários grupos de animais, desde os repteis aos mamíferos,
                                passando pelas aves e não esquecendo as espécies mais ameaçadas e em vias de extinção.
                            </a>
                            
                        </th>
                    </tr>
                </table>
            </div>
            
            
            
            <div class="classe-animal-2">
                <table class="tabela-classes">
                    <tr>
                        
                        <th class="espaco-classes-h2-2">
                            <a class="descricao">Os Sábados Selvagens incluem também encontros com tratadores, para que os mais pequenos e graúdos 
                                possam ficar a saber todas as curiosidades sobre as espécies.
                            </a>
                        </th>
                        <td class="espaco-classes-img-2">
                            <a href="">
                                <img class="imagem-classes" src="Imagens/sabados-selvagens-lateral-2.jpg" alt=""/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="espacamento-2"></div>
            
            <div class="descricao">
                <b>Os Sábados Selvagens realizam-se todos os sábados das 10h às 16h30.</b>
                <br><br>
                A inscrição deverá ser efetuada até 3 dias úteis antes da data pretendida para a realização do programa, 
                mediante disponibilidade do mesmo. Informações através do e-mail pedagogico@zoo.pt ou via telefone 217 232 960.
                <br><br>
                Podem participar adultos e crianças, no entanto aconselha-se a partir dos 4 anos de idade.
                <br><br>
                O número mínimo para a realização deste programa é de 3 pessoas (entre adultos e crianças), sendo que cada Educador
                / Biólogo poderá acompanhar até 12 pessoas por grupo.
            </div>
            
            <div class="espacamento-2"></div>
            
            <div class="caixa-texto">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'pg1')" id="defaultOpen">Quando se realiza</button>
                    <button class="tablinks" onclick="openCity(event, 'pg2')">Preços</button>
                    <button class="tablinks" onclick="openCity(event, 'pg3')">Horário</button>
                    <button class="tablinks" onclick="openCity(event, 'pg4')">Programa</button>
                    <button class="tablinks" onclick="openCity(event, 'pg5')">Objetivos</button>
                    <button class="tablinks" onclick="openCity(event, 'pg6')">Organização do Grupo</button>
                    <button class="tablinks" onclick="openCity(event, 'pg7')">Alimentação e Vestuário</button>
                    <button class="tablinks" onclick="openCity(event, 'pg8')">Inscrição</button>
                </div>

                <div id="pg1" class="tabcontent">
                    <h3>Quando se realiza</h3>
                    <p>
                        <b>Todo o ano, ao Sábado</b><br>
                        Das 10h às 16h30
                    </p>
                </div>
                <div id="pg2" class="tabcontent">
                    <h3>Preços</h3>
                    <p>
                        <b>Adulto</b> 35 €
                        <b>Criança</b> 25 €
                    </p>
                    <p>
                        <b>Incluído</b><br>
                        - Bilhete de entrada no Jardim Zoológico<br>
                        - Acompanhamento técnico permanente<br>
                        - Encontros com tratadores e treinadores<br>
                        - Visita a alguns bastidores<br>
                    </p>
                </div>
                <div id="pg3" class="tabcontent">
                    <h3>Horário</h3>
                    <p>
                        <b>Das 10h ás 16:30h</b>
                        
                    </p>
                    <p>
                        O programa SÁBADOS SELVAGENS tem início às 10h tendo acompanhamento personalizado através de um Educador /
                        Biólogo até às 16h30, ficando os participantes com o restante dia livre para usufruírem do Jardim Zoológico.
                    </p>
                    <p>
                        O encontro dos participantes com o Educador / Biólogo é efetuado na entrada de Sete-Rios, na zona interior do Zoo,
                        às 10h. Salientamos que a falta de pontualidade é prejudicial aos participantes e à qualidade do programa,
                        tal como ao trabalho dos Técnicos do Jardim Zoológico.
                    </p>
                </div>
                <div id="pg4" class="tabcontent">
                    <h3>Programa</h3>
                    <p>
                        <b>Os SÁBADOS SELVAGENS desenvolvem-se através de:</b><br>
                        - Percursos temáticos para conhecer e aprofundar conhecimentos sobre os vários grupos de animais,
                        desde os répteis aos mamíferos, passando pelas aves e não esquecendo, claro está, as espécies mais ameaçadas
                        e em vias de extinção.<br>
                        - Oportunidade para conhecer alguns bastidores e o dia a dia dos tratadores e treinadores.<br>
                        - As apresentações do Zoo também não são esquecidas e algumas fazem parte do programa.<br>
                    </p>
                    <p>
                        Os SÁBADOS SELVAGENS permitem, a quem neles participa, explorar o mundo animal de uma forma inesquecível.
                        É uma forma única e diferente de passar um sábado.
                    </p>
                </div>
                <div id="pg5" class="tabcontent">
                    <h3>Objetivos</h3>
                    <p>
                        - Conhecer e valorizar o Jardim Zoológico, a sua coleção animal, a sua missão e os seus recursos
                    </p>
                    <p>
                        - Sensibilizar e informar para a necessidade de proteção da natureza e para o papel dos Zoos na conservação
                        de espécies em perigo, focando o Jardim Zoológico e a sua missão
                    </p>
                    <p>
                        - Permitir um diálogo vivo com o Jardim Zoológico que aproxime os participantes de valores que fogem à perceção
                        de um "visitante normal"
                    </p>
                    <p>
                        - Contribuir para um projeto de conservação
                    </p>
                </div>
                <div id="pg6" class="tabcontent">
                    <h3>Organização do Grupo</h3>
                    <p>
                        O número mínimo para a realização deste programa é de 3 pessoas (entre adultos e crianças), 
                        no entanto aconselha-se a partir dos 4 anos de idade.
                    </p>
                    <p>
                        
                    </p>
                </div>
                <div id="pg7" class="tabcontent">
                    <h3>Alimentação</h3>
                    <p>
                        As refeições são livres.
                    </p>
                    <p>
                        Antes de entrar na área zoológica há uma zona de restauração e os participantes podem sair e voltar a entrar no Zoo.
                        Para além disso podem também aproveitar o Parque de Merendas, situado no Bosque Encantado, para realizarem um piquenique.
                    </p>
                    <p>
                        Relativamente ao vestuário, sugerimos, roupa e calçado prático, corretamente adaptados à época em que o programa se realiza.
                    </p>
                </div>
                <div id="pg8" class="tabcontent">
                    <h3>Inscição</h3>
                    <p>
                        Programa indisponível de momento.
                        Voltamos em breve.
                    </p>
                </div>
            </div>
            
        </div>
        
        <script>
            function openCity(evt, pagina) {
               var i, tabcontent, tablinks;
                   tabcontent = document.getElementsByClassName("tabcontent");
               for (i = 0; i < tabcontent.length; i++) {
                   tabcontent[i].style.display = "none";
               }
               tablinks = document.getElementsByClassName("tablinks");
               for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
               }
                document.getElementById(pagina).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
        </script>
        
        <?php
            include 'Rodape.php';
        ?>
        
    </body>
</html>

