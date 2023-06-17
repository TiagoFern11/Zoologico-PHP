<?php
include 'busca_animal.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Alterar Animal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../css/slide.css" rel="stylesheet" type="text/css"/>
        <link href="../css/animais-plantas.css" rel="stylesheet" type="text/css"/>
        
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    </head>
    <body>
        <?php
            include '../Componentes/__Menu.php';
        ?>
        
        <form action="AlterarAnimalCheck.php" method="POST">
        
        
        <div class="centro-pagina">
        <div class="espacamento-3"></div>
        <div class="titulo">Editar Animal</div>
        
        <div class="titulo-seccao">Adicionar Imagens
            <input class="botao-classes-amarelo" type="button" id="add_div" value="Adicionar">
        </div>
        <br><b>NOTA:</b> As imagens têm de estar dentro do seguinte diretório:<br><br>
        ../Animais/ nome exatamente igual ao nome que irá ser escrito abaixo no nome do animal<br><br>
        <b>Exemplo:</b> ../Animais/Coelho Bravo
        <div id="idDiv">
            <!--<img class="imagem-animais" src="" alt="" id="imgimg"/>-->
        </div>
        
        
        </div>
        <script>
            $(document).ready(function() {
            var maximo = 10;   //maximo de 5 campos
            var i = 1;
            $('#add_div').click (function(e) {
              e.preventDefault();  //previne novos cliques
              if (i < maximo) {
                $('#idDiv').append('<div>\
                   <br><input type="file" name="imgimg[]"accept="image/jpeg, image/png"  onchange="document.getElementById("imgimg").src = window.URL.createObjectURL(this.files[0])"> \n\
                    \
                   <a href="#" class="remove">Remover</a>\
                    </div>');
                    i++;
                    
              }
           });

             // Remove o div anterior
             $('#idDiv').on("click",".remove",function(e) {
               e.preventDefault();
               $(this).parent('div').remove();
               i--;
             });
         });
        </script>
        
        <div class="espacamento-3"></div>
        <div class="centro-pagina">
            <div class="titulo-seccao">Risco:
            
            <select name="Risco">
                <?php
            echo '<option>Selecione o risco</option>';
            foreach($result_risco as $linharisco) {    
              echo '<option value="'.$linharisco['risco'].'">'.$linharisco["Id_risco"]."-". $linharisco['Risco'] . '</option>';
            }
            ?>
            </select>
            
            </div>
            Indique numero do risco referente á lista:
            <input size="1" type="text" name="Risco_2" ><br><br>
            Id:<input required readonly="true" size="1" type="text" name="id_animal" value="<?php echo $row_animal["Id_animal"]?>">
        </div>
        
        <div class="espacamento-2"></div>
        
        <div class="centro-pagina" style="margin-top: 10px;">
            <a class="titulo-seccao" style="text-align: left;">Nome do Animal:<input required class="nome-animal-planta" style="width: 50%; text-align: left;" type="text" name="Nome" value="<?php echo $row_animal["Nome"]?>"></a><br>
            <a class="titulo-seccao" style="text-align: left;">Nome Cientifico:<input required class="cientifico-animal-planta" style="width: 50%;margin-top: 10px;text-align: left;" type="text" name="Nome_cientifico" value="<?php echo $row_animal["Nome_cientifico"]?>"></a><br>
            
            <div class="informacoes-primarias">
                
                <a class="titulo-seccao">Descricao do Animal</a>
                <a class="texto-animais-plantas">
                    <textarea required class="textarea-grande" type="text" name="Descricao"><?php echo $row_animal["Descricao"]?></textarea>
                </a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Hábitos</a>
                <a class="texto-animais-plantas">
                    <textarea required class="textarea-grande" type="text" name="Habitos"><?php echo $row_animal["Habitos"]?></textarea>
                </a>
                
                
                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Atividade</div>
                        <input name="Atividade" type="file" accept="image/jpeg, image/png" onchange="document.getElementById('img1').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_atividade["Atividade"]?>" alt="" id="img1"/>
                    </div>
                </div>


                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Vida Social</div>
                        <input name="Vida_social" type="file" onchange="document.getElementById('img2').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_vida_social["Vida_social"]?>" alt="" id="img2"/>

                    </div>
                </div>
                <div class="imagem-animais-coluna">
                    <div>
                        <div class="imagem-animais-descricao">Dieta</div>
                        <input name="Dieta" type="file"  onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_dieta["Dieta"]?>" alt="" id="img3"/>
                    </div>
                </div>
                <div class="divisao-animais-plantas"></div>
                <br><b>NOTA:</b> As imagens têm de estar dentro do seguinte diretório:  ../Animais/Icones-Grandes/Habitos/
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Reprodução</a>
                <a class="texto-animais-plantas">
                    <textarea required class="textarea-grande" type="text" name="Reproducao"><?php echo $row_animal["Reproducao"]?></textarea>
                </a>
                
                
                
                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Reprodução</div>
                        
                        <input name="Reproducao_imagem" type="file" onchange="document.getElementById('img4').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_reproducao["Reproducao"]?>" alt="" id="img4"/>
                    </div>

                </div>
                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Nº de Animais</div>
                        <input name="N_animais" type="file" onchange="document.getElementById('img5').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_n_animais["N_animais"]?>" alt="" id="img5"/>
                    </div>
                </div>

                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Gestação</div>
                        <input name="Gestacao" type="file" onchange="document.getElementById('img6').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_n_animais["N_animais"]?>" alt="" id="img6"/>
                        
                    </div>
                </div>

                <div class="imagem-animais-coluna-2">
                    <div>
                        <div class="imagem-animais-descricao">Maturidade Sexual</div>
                        <input name="Maturidade_sexual" type="file" onchange="document.getElementById('img7').src = window.URL.createObjectURL(this.files[0])">
                        <img class="imagem-animais" src="../<?php echo $n_n_animais["N_animais"]?>" alt="" id="img7"/>
                    </div>
                </div>
                <div class="divisao-animais-plantas"></div>
                <br><b>NOTA:</b> As imagens têm de estar dentro do seguinte diretório:  ../Animais/Icones-Grandes/Reproducao/
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Conservação</a>
                <a class="texto-animais-plantas">
                    <textarea required class="textarea-grande" type="text" name="Conservacao"><?php echo $row_animal["Conservacao"]?></textarea>
                </a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Habitat</a>
                <a class="texto-animais-plantas">
                    <textarea required class="textarea-grande" type="text" name="Habitat"><?php echo $row_animal["Habitat"]?></textarea>
                </a>
                
                
                
                
                <a class="titulo-seccao">Habitat</a>
                <!--<select onchange="document.getElementById('img8').src = window.URL.createObjectURL(this.files[0])">
                    <?php //while ($linha_atividade= mysqli_fetch_array($result_atividade)):;?>
                    <option><?php //echo $linha_atividade[1];?></option>
                    <?php //endwhile;?>
                </select>-->
                <input name="Habitat_mapa" type="file" onchange="document.getElementById('img8').src = window.URL.createObjectURL(this.files[0])">
                <img class="imagem-mapa" src="../<?php echo $row_animal["Habitat_mapa"]?>" alt="" id="img8"/>
                
                <a class="titulo-seccao">Imagem Miniatura</a>
                <input name="Miniatura" type="file" name="Miniatura" onchange="document.getElementById('img9').src = window.URL.createObjectURL(this.files[0])">
                <img class="imagem-mapa" src="../<?php echo $row_animal["Miniatura"]?>" alt="" id="img9"/>
                
                <!--
                
                <input type="file" name="Habitat_mapa" onchange="readURL(this);">
                <img class="imagem-mapa" src="" alt="" id="blah"/>
                
                <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imgInp").change(function() {
                    readURL(this);
                  });
                </script>  -->
            </div>
            
            
            <div class="informacoes-secundarias">
                
                <div class="divisao-animais-plantas"></div>
                
                <table class="tabela-familias-animais">
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Classe:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><input required type="text" name="Classe" value="<?php echo $row_animal["Classe"]?>"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Ordem:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><input required type="text" name="Ordem" value="<?php echo $row_animal["Ordem"]?>"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="titulo-seccao-2">Família:</a>
                        </td>
                        <td>
                            <a class="texto-animais-plantas"><input required type="text" name="Familia" value="<?php echo $row_animal["Familia"]?>"></a>
                        </td>
                    </tr>
                </table>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Tamanho</a>
                <a class="texto-animais-plantas"><input required type="text" name="Tamanho" value="<?php echo $row_animal["Tamanho"]?>">cm</a>
                
                <div class="divisao-animais-plantas"></div>
                
                <a class="titulo-seccao">Peso</a>
                <a class="texto-animais-plantas"><input required type="text" name="Peso" value="<?php echo $row_animal["Peso"]?>">g</a>
                
                <div class="divisao-animais-plantas"></div>
                
                <!---<a href="../Apadrinhar.html" class="botao-classes centro">Apadrinhar Animal</a>-->
                <input type="submit" class="botao-classes centro" value="Alterar Animal">
                <div class="divisao-animais-plantas"></div>
                
            </div>
        </div>
        </form>
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