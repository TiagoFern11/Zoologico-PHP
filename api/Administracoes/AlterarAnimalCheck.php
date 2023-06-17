<?php
include '../Componentes/conexao.php';
$id_animal=$_POST["id_animal"];

$sqlanimal="SELECT * FROM animal Where Id_animal='$id_animal'";
$res = $pdo->query($sqlanimal);
$row_animal=$res->fetch();
//$imagemimagem=$_POST['imgimg'];
$risco=$_POST['Risco'];
$risco_2=$_POST['Risco_2'];
$nome=$_POST['Nome'];
$nome_cientifico=$_POST['Nome_cientifico'];
$descricao=$_POST['Descricao'];
$habitos=$_POST['Habitos'];
$reproducao=$_POST['Reproducao'];
$conservacao=$_POST['Conservacao'];
$habitat=$_POST['Habitat'];
$habitat_mapa=$_POST['Habitat_mapa'];
$classe=$_POST['Classe'];
$ordem=$_POST['Ordem'];
$familia=$_POST['Familia'];
$tamanho=$_POST['Tamanho'];
$peso=$_POST['Peso'];
$miniatura=$_POST['Miniatura'];

if(empty($_POST['Atividade'])===false){
    $atividade=$_POST['Atividade'];
    //echo "atividade:".$atividade."<br>";
    $sql_insert_atividade="UPDATE atividade SET Atividade='Animais/Icones-Grandes/Habitos/$atividade' WHERE Id_atividade='".$row_animal["Id_atividade"]."'";
    $res_atividade = $pdo->query($sql_insert_atividade);
}
if(empty($_POST['Vida_social'])===false){
    $vida_social=$_POST['Vida_social'];
    //echo "vida_social:".$vida_social."<br>";
    $sql_insert_vida_social="UPDATE vida_social SET Vida_social='Animais/Icones-Grandes/Habitos/$vida_social' WHERE Id_vida_social='".$row_animal["Id_vida_social"]."'";
    $res_vida_social = $pdo->query($sql_insert_vida_social);
}


if(empty($_POST['Dieta'])===false){
    $dieta=$_POST['Dieta'];
    //echo "dieta:".$dieta."<br>";
    $sql_insert_dieta="UPDATE dieta SET Dieta='Animais/Icones-Grandes/Habitos/$dieta' WHERE Id_dieta='".$row_animal["Id_dieta"]."'";
    $res_dieta = $pdo->query($sql_insert_dieta);
}


if(empty($_POST['Reproducao_imagem'])===false){
    $reproducao_imagem=$_POST['Reproducao_imagem'];
    //echo "reproducao:".$reproducao_imagem."<br>";
    $sql_insert_reproducao="UPDATE reproducao SET Reproducao='Animais/Icones-Grandes/Reproducao/$reproducao_imagem' WHERE Id_reproducao='".$row_animal["Id_reproducao"]."'";
    $res_reproducao = $pdo->query($sql_insert_reproducao);
}


if(empty($_POST['N_animais'])===false){
    $n_animais=$_POST['N_animais'];
    //echo "atividade:".$n_animais."<br>";
    $sql_insert_n_animais="UPDATE n_animais SET N_animais='Animais/Icones-Grandes/Reproducao/$n_animais' WHERE Id_n_animais='".$row_animal["Id_n_animais"]."'";
    $res_n_animais = $pdo->query($sql_insert_n_animais);
}


if(empty($_POST['Gestacao'])===false){
    $gestacao=$_POST['Gestacao'];
    //echo "atividade:".$gestacao."<br>";
    $sql_insert_gestacao="UPDATE gestacao SET Gestacao='Animais/Icones-Grandes/Reproducao/$gestacao' WHERE Id_gestacao='".$row_animal["Id_n_animais"]."'";
    $res_gestacao = $pdo->query($sql_insert_gestacao);
}


if(empty($_POST['Maturidade_sexual'])===false){
    $maturidade_sexual=$_POST['Maturidade_sexual'];
    //echo "atividade:".$maturidade_sexual."<br>";
    $sql_insert_maturidade_sexual="UPDATE maturidade_sexual SET Maturidade_sexual='Animais/Icones-Grandes/Reproducao/$maturidade_sexual' WHERE Id_maturidade_sexual='".$row_animal["Id_maturidade_sexual"]."'";
    $res_maturidade_sexual = $pdo->query($sql_insert_maturidade_sexual);
}

if(empty($_POST['Habitat_mapa'])===false){
    $habitat_mapa=$_POST['Habitat_mapa'];
    //echo "atividade:".$habitat_mapa."<br>";
    $sql_insert_habitat_mapa="UPDATE animal SET Habitat_mapa='Animais/$nome/$habitat_mapa' WHERE Id_animal='".$row_animal["Id_animal"]."'";
    $res_habitat_mapa = $pdo->query($sql_insert_habitat_mapa);
}

if(empty($_POST['Miniatura'])===false){
    $miniatura=$_POST['Miniatura'];
    //echo "atividade:".$miniatura."<br>";
    $sql_insert_miniatura="UPDATE animal SET Miniatura='Animais/$nome/$miniatura' WHERE Id_animal='".$row_animal["Id_animal"]."'";
    $res_miniatura = $pdo->query($sql_insert_miniatura);
}

if(empty($_POST['Risco_2'])===false){
    $risco_2=$_POST['Risco_2'];
    //echo "atividade:".$habitat_mapa."<br>";
    $sql_insert_risco_2="UPDATE animal SET Id_risco='$risco_2' WHERE Id_animal='".$row_animal["Id_animal"]."'";
    $res_risco_2 = $pdo->query($sql_insert_risco_2);
}

$sql_insert_animal="UPDATE animal SET Nome='$nome',Nome_cientifico='$nome_cientifico',Descricao='$descricao',Habitos='$habitos',Reproducao='$reproducao',Conservacao='$conservacao',Habitat='$habitat',Classe='$classe',Ordem='$ordem',Familia='$familia',Tamanho='$tamanho',Peso='$peso' WHERE Id_animal='".$row_animal["Id_animal"]."'";
$res_animal = $pdo->query($sql_insert_animal);

/*
$resultimg = count($imagemimagem);

for ($i = 0; $i < ($resultimg) ; $i++) {
  echo $imagemimagem[$i]."<br>";
}*/

/*
echo $nanimais."<br>";

echo $risco."<br>".$nome."<br>".$nome_cientifico."<br>".$descricao."<br>".$habitos."<br>".$atividade."<br>".
        $vida_social."<br>".$dieta."<br>".$reproducao."<br>".$reproducao_imagem."<br>".
        $n_animais."<br>".$gestacao."<br>".$maturidade_sexual."<br>".$conservacao."<br>".
        $habitat."<br>".$habitat_mapa."<br>".$classe."<br>".$ordem."<br>".$familia."<br>".
        $tamanho."<br>".$peso."<br>".$miniatura_img."<br>";


$sql_insert_animal="INSERT INTO animal(Nome, Nome_cientifico, Id_risco, Descricao, Habitos, Id_atividade, Id_vida_social, Id_dieta, Reproducao, Id_reproducao, Id_n_animais, Id_gestacao, Id_maturidade_sexual, Conservacao, Habitat, Habitat_mapa, Classe, Ordem, Familia, Tamanho, Peso, Miniatura) 
         VALUES ('$nome','$nome_cientifico','2','$descricao','$habitos','$n_atividade','$n_vida_social','$n_dieta','$reproducao','$n_reproducao','$n_n_animais','$n_gestacao','$n_maturidade_sexual','$conservacao','$habitat','$habitat_mapa','$classe','$ordem','$familia','$tamanho','$peso','$miniatura_img')";
$res_animal = $pdo->query($sql_insert_animal);


for ($i = 0; $i < ($resultimg) ; $i++) {
    $caminho_imagem="Animais/$nome/$imagemimagem[$i]";
    echo $caminho_imagem;
    $sqlimagens="insert into imagem_animal(Imagem) values ('$caminho_imagem')";
    $result_imagens=$pdo->query($sqlimagens);
    
    $sqlimgimg="SELECT Id_imagem FROM imagem_animal where Imagem='$caminho_imagem'";
    $resimg = $pdo->query($sqlimgimg);
    $n_imagem = $resimg->fetchColumn();
    echo $n_imagem."<br>";
    
    $sql_animal_imagem="INSERT INTO animal_imagem(Id_animal, Id_imagem) values ('$nanimais','$n_imagem')";
    $result_animal_imagem=$pdo->query($sql_animal_imagem);
}
echo "<br><br>Animal Introduzido!!<br>";
echo "<a href='Lista_animais.php'>Ir para a lista</a>";

//}

*/
header('location:index_admin.php');