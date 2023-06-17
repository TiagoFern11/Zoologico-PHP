<?php
include '../Componentes/conexao.php';

echo "<!DOCTYPE html>";
echo "<html>";
    echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<title>Our Zoo</title>";
        echo "<link href='../css/menu.css' rel='stylesheet' type='text/css'/>";
        echo "<link href='../css/estilos.css' rel='stylesheet' type='text/css'/>";
    echo "</head>";
    echo "<body>";
        include '../Componentes/__Menu.php';
        echo "<div class='espacamento'></div>";
        echo "<div class='centro-pagina'>";
        


/*
$sqlanimal="SELECT * FROM animal ORDER BY Id_animal DESC LIMIT 1";
$res = $pdo->query($sqlanimal);
$nanimais = $res->fetchColumn();
$nanimais=$nanimais+1;
*/
$imagemimagem=$_POST['imgimg'];
$risco=$_POST['Risco'];
$risco_2=$_POST['Risco_2'];
$nome=$_POST['Nome'];
$nome_cientifico=$_POST['Nome_cientifico'];
$descricao=$_POST['Descricao'];
$habitos=$_POST['Habitos'];
$atividade=$_POST['Atividade'];
$vida_social=$_POST['Vida_social'];
$dieta=$_POST['Dieta'];
$reproducao=$_POST['Reproducao'];
$reproducao_imagem=$_POST['Reproducao_imagem'];
$n_animais=$_POST['N_animais'];
$gestacao=$_POST['Gestacao'];
$maturidade_sexual=$_POST['Maturidade_sexual'];
$conservacao=$_POST['Conservacao'];
$habitat=$_POST['Habitat'];
$habitat_mapa=$_POST['Habitat_mapa'];
$classe=$_POST['Classe'];
$ordem=$_POST['Ordem'];
$familia=$_POST['Familia'];
$tamanho=$_POST['Tamanho'];
$peso=$_POST['Peso'];
$miniatura=$_POST['Miniatura'];

/*
if($imagemimagem!=0||
        $risco!=0||
        $nome!=0||
        $nome_cientifico!=0||
        $descricao!=0||
        $habitos!=0||
        $atividade!=0||
        $vida_social!=0||
        $dieta!=0||
        $reproducao!=0||
        $reproducao_imagem!=0||
        $n_animais!=0||
        $gestacao!=0||
        $maturidade_sexual!=0||
        $conservacao!=0||
        $habitat!=0||
        $habitat_mapa!=0||
        $classe!=0||
        $ordem!=0||
        $familia!=0||
        $tamanho!=0||
        $peso!=0||
        $miniatura){
    echo "Valores em falta!";
}
else{
*/
$resultimg = count($imagemimagem);

for ($i = 0; $i < ($resultimg) ; $i++) {
  echo $imagemimagem[$i]."<br>";
}

$atividade="Animais/Icones-Grandes/Habitos/".$atividade;
$vida_social="Animais/Icones-Grandes/Habitos/".$vida_social;
$dieta="Animais/Icones-Grandes/Habitos/".$dieta;

$reproducao_imagem="Animais/Icones-Grandes/Reproducao/".$reproducao_imagem;
$n_animais="Animais/Icones-Grandes/Reproducao/".$n_animais;
$gestacao="Animais/Icones-Grandes/Reproducao/".$gestacao;
$maturidade_sexual="Animais/Icones-Grandes/Reproducao/".$maturidade_sexual;
$habitat_mapa="Animais/$nome/$habitat_mapa";
$miniatura_img="Animais/$nome/$miniatura";

//echo $nanimais."<br>";
echo "risco:".$risco."risco_2:".$risco_2."<br>".$nome."<br>".$nome_cientifico."<br>".$descricao."<br>".$habitos."<br>".$atividade."<br>".
        $vida_social."<br>".$dieta."<br>".$reproducao."<br>".$reproducao_imagem."<br>".
        $n_animais."<br>".$gestacao."<br>".$maturidade_sexual."<br>".$conservacao."<br>".
        $habitat."<br>".$habitat_mapa."<br>".$classe."<br>".$ordem."<br>".$familia."<br>".
        $tamanho."<br>".$peso."<br>".$miniatura_img."<br>";


$sql_insert_atividade="INSERT INTO atividade(Atividade) VALUES ('$atividade')";
$res_atividade = $pdo->query($sql_insert_atividade);

$sql_sel_atividade="SELECT Id_atividade FROM atividade WHERE Atividade='$atividade'";
$resatividade = $pdo->query($sql_sel_atividade);
$n_atividade = $resatividade->fetchColumn();
echo $n_atividade."<br>";

$sql_insert_vida_social="INSERT INTO vida_social(Vida_social) VALUES ('$vida_social')";
$res_vida_social = $pdo->query($sql_insert_vida_social);

$sql_select_vida_social="SELECT Id_vida_social FROM vida_social where Vida_social='$vida_social'";
$resvida_social = $pdo->query($sql_select_vida_social);
$n_vida_social = $resvida_social->fetchColumn();
echo $n_vida_social."<br>";

$sql_insert_dieta="INSERT INTO dieta(Dieta) VALUES ('$dieta')";
$res_dieta = $pdo->query($sql_insert_dieta);
$sql_select_dieta="SELECT Id_dieta FROM dieta where Dieta='$dieta'";
$resdieta = $pdo->query($sql_select_dieta);
$n_dieta = $resdieta->fetchColumn();
echo $n_dieta."<br>";

$sql_insert_reproducao="INSERT INTO reproducao(Reproducao) VALUES ('$reproducao_imagem')";
$res_reproducao = $pdo->query($sql_insert_reproducao);
$sql_select_reproducao="SELECT Id_reproducao FROM reproducao where Reproducao='$reproducao_imagem'";
$resreproducao = $pdo->query($sql_select_reproducao);
$n_reproducao = $resreproducao->fetchColumn();
echo $n_reproducao."<br>";

$sql_insert_n_animais="INSERT INTO n_animais(N_animais) VALUES ('$n_animais')";
$res_n_animais = $pdo->query($sql_insert_n_animais);
$sql_select_n_animais="SELECT Id_n_animais FROM n_animais where N_animais='$n_animais'";
$resn_animais = $pdo->query($sql_select_n_animais);
$n_n_animais = $resn_animais->fetchColumn();
echo $n_n_animais."<br>";

$sql_insert_gestacao="INSERT INTO gestacao(Gestacao) VALUES ('$gestacao')";
$res_gestacao = $pdo->query($sql_insert_gestacao);
$sql_select_gestacao="SELECT Id_gestacao FROM gestacao where Gestacao='$gestacao'";
$resgestacao = $pdo->query($sql_select_gestacao);
$n_gestacao = $resgestacao->fetchColumn();
echo $n_gestacao."<br>";

$sql_insert_maturidade_sexual="INSERT INTO maturidade_sexual(Maturidade_sexual) VALUES ('$maturidade_sexual')";
$res_maturidade_sexual = $pdo->query($sql_insert_maturidade_sexual);
$sql_select_maturidade_sexual="SELECT Id_maturidade_sexual FROM maturidade_sexual where Maturidade_sexual='$maturidade_sexual'";
$resmaturidade_sexual = $pdo->query($sql_select_maturidade_sexual);
$n_maturidade_sexual = $resmaturidade_sexual->fetchColumn();
echo $n_maturidade_sexual."<br>";


$sql_insert_animal="INSERT INTO animal(Nome, Nome_cientifico, Id_risco, Descricao, Habitos, Id_atividade, Id_vida_social, Id_dieta, Reproducao, Id_reproducao, Id_n_animais, Id_gestacao, Id_maturidade_sexual, Conservacao, Habitat, Habitat_mapa, Classe, Ordem, Familia, Tamanho, Peso, Miniatura) 
         VALUES ('$nome','$nome_cientifico','$risco_2','$descricao','$habitos','$n_atividade','$n_vida_social','$n_dieta','$reproducao','$n_reproducao','$n_n_animais','$n_gestacao','$n_maturidade_sexual','$conservacao','$habitat','$habitat_mapa','$classe','$ordem','$familia','$tamanho','$peso','$miniatura_img')";
$res_animal = $pdo->query($sql_insert_animal);

$sqlanimal_animal="SELECT * FROM animal ORDER BY Id_animal DESC LIMIT 1";
$resultado = $pdo->query($sqlanimal_animal);
$n_animal = $resultado->fetchColumn();
echo "id_animal:".$n_animal."<br>";

for ($i = 0; $i < ($resultimg) ; $i++) {
    $caminho_imagem="Animais/$nome/$imagemimagem[$i]";
    echo $caminho_imagem;
    $sqlimagens="insert into imagem_animal(Imagem) values ('$caminho_imagem')";
    $result_imagens=$pdo->query($sqlimagens);
    
    $sqlimgimg="SELECT Id_imagem FROM imagem_animal where Imagem='$caminho_imagem'";
    $resimg = $pdo->query($sqlimgimg);
    $n_imagem = $resimg->fetchColumn();
    echo "  id_imagem:".$n_imagem."<br>";
    
    $sql_animal_imagem="INSERT INTO animal_imagem(Id_animal, Id_imagem) values ('$n_animal','$n_imagem')";
    $result_animal_imagem=$pdo->query($sql_animal_imagem);
}
echo "<br><br>Animal Introduzido!!<br>";
echo "<a href='Lista_animais.php'>Ir para a lista</a>";

        echo "</div>";
        include '../Componentes/__Rodape.php';
    echo "</body>";
echo "</html>";
//}

