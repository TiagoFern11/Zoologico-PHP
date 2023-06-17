<?php
include '../Componentes/conexao.php';
$sql="
SELECT 
animal.Id_animal,
animal.Nome,
animal.Nome_cientifico,
animal.Descricao,
animal.Habitos,
animal.Reproducao,
animal.Conservacao,
animal.Habitat,
animal.Habitat_mapa,
animal.Classe,
animal.Ordem,
animal.Familia,
animal.Tamanho,
animal.Peso,
animal.Miniatura,

atividade.Atividade,
vida_social.Vida_social,
dieta.Dieta,
reproducao.Reproducao AS Reproducao_imagem,
n_animais.N_animais,
gestacao.Gestacao,
maturidade_sexual.Maturidade_sexual
 
FROM animal

INNER JOIN atividade ON animal.Id_atividade=atividade.Id_atividade
INNER JOIN vida_social ON animal.Id_vida_social=vida_social.Id_vida_social
INNER JOIN dieta on animal.Id_dieta=dieta.Id_dieta
INNER JOIN reproducao on animal.Id_reproducao=reproducao.Id_reproducao
INNER JOIN n_animais on animal.Id_n_animais=n_animais.Id_n_animais
INNER JOIN gestacao on animal.Id_gestacao=gestacao.Id_gestacao
INNER JOIN maturidade_sexual on animal.Id_maturidade_sexual=maturidade_sexual.Id_maturidade_sexual
INNER JOIN risco on animal.Id_risco=risco.Id_risco

WHERE animal.Id_animal='".$_GET["idanimal"]."'";
$result=$pdo->query($sql);
$row = $result->fetch();

$sqlimagens="
SELECT imagem_animal.Imagem
FROM animal_imagem
INNER JOIN animal ON animal.Id_animal=animal_imagem.Id_animal
INNER JOIN imagem_animal ON imagem_animal.Id_imagem=animal_imagem.Id_imagem

WHERE animal.Id_animal='".$_GET["idanimal"]."'";
$resultimagem=$pdo->query($sqlimagens);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Suricata</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="../css/animais-plantas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include '../Componentes/__Menu.php';
        ?>
        <!--------------Slide--------------------->
        <div class="slideshow-container">
            <?php
            
            foreach ($resultimagem->fetchAll() as $imag){
            echo "<div class='mySlides fade'>";
                echo '<div class="img-slide-1" style="background-image:url('.$imag["Imagem"].')"></div>';
            echo "</div>";
            echo $imag["Imagem"]."<br>";
            $n_imagens=$resultimagem->rowCount();
            //<div class="mySlides fade">
            //    <iframe class="video-slide" src="https://www.youtube.com/embed/NvXtQNH8Qow" frameborder="0" allowfullscreen>
            //    </iframe>
            //</div>
                    
            }
             ?>
            <!--
            &#10094;
            &#10095;
            -->
            <div class="slide-botoes" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>
                <!--<span class="dot" onclick="currentSlide(4)"></span>-->
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
        <div class="espacamento-3"></div>
        <div class="centro-pagina">
            <table class="tabela-botoes-extincao">
                <tr>
                    <th class="espaco-botoes-extincao">
                        Não Avaliada
                    </th>
                    <th class="espaco-botoes-extincao extincao-ativo">
                        Pouco Preocupante
                    </th>
                    <th class="espaco-botoes-extincao">
                        Vuneravél
                    </th>
                    <th class="espaco-botoes-extincao">
                        Em Perigo
                    </th>
                    <th class="espaco-botoes-extincao">
                        Criticamente em Perigo
                    </th>
                    <th class="espaco-botoes-extincao">
                        Extinta na Natureza
                    </th>
                    <th class="espaco-botoes-extincao">
                        Extinta
                    </th>
                </tr>
            </table>
        </div>
        
        
        
        <div class="centro-pagina" style="margin-top: 10px;">
            <a class="nome-animal-planta"><?php echo $row["Nome"];?></a><br>
            <a class="cientifico-animal-planta"><?php echo $row["Nome_cientifico"];?></a>
            
            <div class="informacoes-primarias">
                
                <a class="titulo-seccao">Descricao do Animal</a>
                <a class="texto-animais-plantas">
                    <?php echo $row["Descricao"];?>
                </a>
                
                <div class="divisao-animais-plantas"></div>
                
                
                
                <a class="titulo-seccao">Hábitos</a>
                <a class="texto-animais-plantas">
                    <?php echo $row["Habitos"];?>
                </a>
                
                
                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Atividade</div>
                        <img class="imagem-animais" src="<?php echo $row["Atividade"]?>" alt=""/>
                    </div>

                </div>


                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Vida Social</div>
                        <img class="imagem-animais" src="<?php echo $row["Vida_social"]?>" alt=""/>

                    </div>
                </div>
                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Dieta</div>
                        <img class="imagem-animais" src="<?php echo $row["Dieta"]?>" alt=""/>
                    </div>
                </div>
                
                
                <div class="divisao-animais-plantas"></div>
                
                
                
                <a class="titulo-seccao">Reprodução</a>
                <a class="texto-animais-plantas">
                    <?php echo $row["Reproducao"];?>
                </a>
                
                
                
                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Reprodução</div>
                        <img class="imagem-animais" src="<?php echo $row["Reproducao_imagem"]?>" alt=""/>
                    </div>

                </div>
                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Nº de Animais</div>
                        <img class="imagem-animais" src="<?php echo $row["N_animais"]?>" alt=""/>
                    </div>
                </div>

                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Gestação</div>
                        <img class="imagem-animais" src="<?php echo $row["Gestacao"]?>" alt=""/>
                        
                    </div>
                </div>

                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Maturidade Sexual</div>
                        <img class="imagem-animais" src="<?php echo $row["Maturidade_sexual"]?>" alt=""/>
                    </div>
                </div>
                
                
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Conservação</a>
                <a class="texto-animais-plantas">
                    <?php echo $row["Conservacao"];?>
                </a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Habitat</a>
                <a class="texto-animais-plantas">
                    <?php echo $row["Habitat"];?>
                </a>
                <img class="imagem-mapa" src="<?php echo $row["Habitat_mapa"];?>" alt=""/>
                
             
            </div>
            
            
            <div class="informacoes-secundarias">
                
                <div class="divisao-animais-plantas"></div>
                
                <table class="tabela-familias-animais">
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Classe:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><?php echo $row["Classe"];?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Ordem:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><?php echo $row["Ordem"];?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Família:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><?php echo $row["Familia"];?></a>
                        </td>
                    </tr>
                </table>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Tamanho</a>
                <a class="texto-animais-plantas">Altura: <?php echo $row["Tamanho"];?>cm</a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Peso</a>
                <a class="texto-animais-plantas"><?php echo $row["Peso"];?>g</a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a href="../Apadrinhar.html" class="botao-classes centro">Apadrinhar Animal</a>
                
                <div class="divisao-animais-plantas"></div>
                
            </div>
        </div>
        
        <?php
            include '../Componentes/__Rodape.php';
        ?>
    </body>
</html>
<?php

//}
//else {
//    echo "Sem resultado";
//}
?>