<!DOCTYPE html>
<html>
    <head>
        <title>Our Zoo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'Menu.php';
        ?>

        <!--------------Slide--------------------->
        
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img class="img-slide" src="Imagens-Paginas/capybara_nationalgeographic_1518115.jpg" alt=""/>
                <div class="texto-encima-3">
                    <img class="estrela" src="Imagens/estrela-do-zoo-1.png" alt=""/>
                </div>
                <div class="texto-encima-4 texto-encima-imagem">
                    
                    <a class="titulo-encima-imagem-2">Apresentamos a Estrela do nosso Zoo!</a>
                    <a class="titulo-encima-imagem-2">A Capivara</a>
                    <a href="Animal.php?id_animal=68" class="botao-classes">Saber Mais</a>
                </div>
                
            </div>
            <div class="mySlides fade">
                <img class="img-slide" src="Animais/cria-golfinho-banner-2.jpg" alt=""/>
                <div class="texto-encima-2 texto-encima-imagem">
                    <a class="titulo-encima-imagem-2">Nova Cria de Golfinho, ajude a escolher o seu nome!</a>
                    <a href="Votacao-golfinho.php" class="botao-classes">Saber Mais</a>
                </div>
            </div>
            <div class="mySlides fade">
                <img class="img-slide" src="Animais/zoo_padrinho-banner.jpg" alt="">
                <div class="texto-encima-2 texto-encima-imagem">
                    <a class="titulo-encima-imagem-2">Torna-te num Padrinho muito Orgulhoso!</a>
                    <a href="Apadrinhar.php" class="botao-classes">Saber Mais</a>
                </div>
            </div>

            <div class="mySlides fade">
                <img class="img-slide" src="Imagens-Paginas/topo-conservacao.jpg" alt=""/>
                <div class="texto-encima-5 texto-encima-imagem">
                    <a class="titulo-encima-imagem-2">Já Sabe o que vai visitar?</a>
                    <a href="Sugestao-visita.php" class="botao-classes">Saber Mais</a>
                </div>
            </div>
            <div class="slide-botoes" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
            </div>
            <a class="prev" onclick="plusSlides(-1)"></a>
            <a class="next" onclick="plusSlides(1)"></a>
            
        </div>
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        <div class="pagina-completa">
            <table class="tabela-completa">
                <tr>
                    <th class="espaco-botoes">
                        <a href="Precos.php">
                            <button class="butoes-main">Preços</button>
                        </a>
                    </th>
                    <th class="espaco-botoes">
                        <a href="Planear-Visita.php">
                            <button class="butoes-main">Planear Visita</button>
                        </a>
                    </th>
                    <th class="espaco-botoes">
                        <a href="Bilheteira.php">
                            <button class="butoes-main">Comprar bilhetes Online</button>
                        </a>
                    </th>
                    <th class="espaco-botoes">
                        <a href="Mapa.php">
                            <button class="butoes-main">Mapa do Zoo</button>
                        </a>
                    </th>
                </tr>
            </table>
        </div>
        
        <div class="centro-pagina">
            <a class="titulo">Animais do Mês</a>
            <div class="espacamento-2"></div>
            <table class="tabela-imagens">
                <tr>
                    <td class="caixa-imagem">
                        <img class="imagem-1" src="Animais/suricata/suricata-2.jpg" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">Conhece o comportamento do Suricata?</a>
                            <a href="Animal.php?id_animal=1" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                    <td class="caixa-imagem">
                        <img class="imagem-1" src="Animais/Capivara/capivara6.jpg" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">Conhece a alimentação da Capivara?</a>
                            <a href="Animal.php?id_animal=68" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                    <td class="caixa-imagem">
                        <img class="imagem-1" src="Animais/Araçari Verde/Ara_ari-verde_topo4.png" alt=""/>
                        <div class="centro-pagina">
                            <a class="descricao-4">O Araçari vive em bando ou em casal?</a>
                            <a href="" class="botao-classes-amarelo">Saber Mais</a>
                        </div>
                    </td>
                </tr>
            </table>
            
            
            
            
            <div class="espacamento"></div>
            
            <div class="classe-animal-2">
                <table class="tabela-classes">
                    <tr>
                        <td class="espaco-classes-img-2 imagem-classes-4" style="background-image: url('Imagens/cria-golfinho-lateral.jpg')"></td>
                        
                        <th class="espaco-classes-h2-2 padrao-riscas">
                            <a class="nome-classe">Votação</a><br>
                            <a class="descricao-encima-imagem">Escolha o nome para a nova<br> cria de Golfinho!</a>
                            <form>
                            <table class="tabela-simples">
                                <tr>
                                    <td>
                                        <input class="botao-radio" type="radio" id="Tejo" name="Nome" value="Tejo" checked="">
                                    </td>
                                    <th>
                                        <a>Tejo</a><br>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="botao-radio" type="radio" id="Arade" name="Nome" value="Arade">
                                    </td>
                                    <th>
                                        <a>Arade</a><br>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="botao-radio" type="radio" id="Troia" name="Nome" value="Troia">
                                    </td>
                                    <th>
                                        <a>Troia</a><br>
                                    </th>
                                </tr>
                            </table>
                            <a href="Votacao-golfinho.php" class="botao-classes-amarelo">Votar</a>
                            </form>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="espacamento-2"></div>
            <h1 class="titulo">Novidades
                <a href="Novidades.php" class="butoes-azul" style="width: 15%;text-indent : 0em;">Ver todas</a>
            </h1>
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
        </div>
        
        <div class="imagem-inicial-grande">
            <img class="imagem-video-medio" src="Imagens-Paginas/zoo-banner-atracoes.jpg" alt=""/>
            <div class="texto-encima-1 texto-encima-imagem">
                <a class="titulo-encima-imagem">Apresentações e Atrações</a><br>
                <a class="descricao-encima-imagem">Da floresta húmida tropical à árida savana Africana<br>
                    Conheça todas as apresentações que temos á sua espera!
                </a>
                <a href="Apresentacoes-Atracoes.php" class="botao-classes">Saber Mais</a>
            </div>
        </div>
      
        <?php
            include 'Rodape.php';
        ?>
        
    </body>
</html>
