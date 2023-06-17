<?php
include '../Componentes/conexao.php';

$id_animal=$_GET["id_animal"];
echo "Id_animal:".$id_animal;

$sqlanimal="SELECT * FROM animal Where Id_animal='$id_animal'";
$res = $pdo->query($sqlanimal);
$row_animal=$res->fetch();
echo "<br>row_animal:".$row_animal["Id_animal"];

$sqlimg="SELECT animal_imagem.Id_imagem FROM animal_imagem INNER join animal ON animal_imagem.Id_animal=animal.Id_animal WHERE animal.Id_animal=$id_animal";
$resimg = $pdo->query($sqlimg);
echo "<br>".$sqlimg;

$sql_delete_animal="DELETE FROM animal WHERE Id_animal=$id_animal";
echo "<br>".$sql_delete_animal;
$res_animal = $pdo->query($sql_delete_animal);


foreach ($resimg->fetchAll() as $row){
    /*$sqlimgimg="SELECT Id_imagem FROM animal_imagem where Id_animal='$id_animal'";
    $resimgimg = $pdo->query($sqlimgimg);
    $imgimg=$resimgimg->fetch();
    echo '<br>Imagem:'.$imgimg;*/

    echo "row:".$row["Id_imagem"];
    $sql_delete_imagem="DELETE FROM imagem_animal WHERE Id_imagem='".$row["Id_imagem"]."'";
    echo $sql_delete_imagem;
    $res_imagem = $pdo->query($sql_delete_imagem);
    echo "teste";
    $sql_delete_animal_imagem="DELETE FROM 'animal_imagem' WHERE Id_animal='$id_animal'";
    $res_animal_imagem = $pdo->query($sql_delete_animal_imagem);
    //echo '<br>Imagem:'.$imgimg;
}

$sql_delete_atividade="DELETE FROM atividade WHERE Id_atividade=".$row_animal["Id_atividade"];
$result_atividade=$pdo->query($sql_delete_atividade);
echo '<br>Deletado atividade:'.$row_animal["Id_atividade"];

$sql_delete_vida_social="DELETE FROM vida_social WHERE Id_vida_social='".$row_animal["Id_vida_social"]."'";
$res_vida_social = $pdo->query($sql_delete_vida_social);
echo '<br>Deletado vida_social:'.$row_animal["Id_vida_social"];

$sql_delete_dieta="DELETE FROM dieta WHERE Id_dieta='".$row_animal["Id_dieta"]."'";
$res_dieta = $pdo->query($sql_delete_dieta);
echo '<br>Deletado dieta:'.$row_animal["Id_dieta"];

$sql_delete_reproducao="DELETE FROM reproducao WHERE Id_reproducao='".$row_animal["Id_reproducao"]."'";
$res_reproducao = $pdo->query($sql_delete_reproducao);
echo '<br>Deletado reproducao:'.$row_animal["Id_reproducao"];

$sql_delete_n_animais="DELETE FROM n_animais WHERE Id_n_animais='".$row_animal["Id_n_animais"]."'";
$res_n_animais = $pdo->query($sql_delete_n_animais);
echo '<br>Deletado n_animais:'.$row_animal["Id_n_animais"];

$sql_delete_gestacao="DELETE FROM gestacao WHERE Id_gestacao='".$row_animal["Id_n_animais"]."'";
$res_gestacao = $pdo->query($sql_delete_gestacao);
echo '<br>Deletado gestacao:'.$row_animal["Id_n_animais"];

$sql_delete_maturidade_sexual="DELETE FROM maturidade_sexual WHERE Id_maturidade_sexual='".$row_animal["Id_maturidade_sexual"]."'";
$res_maturidade_sexual = $pdo->query($sql_delete_maturidade_sexual);
echo '<br>Deletado maturidade_sexual:'.$row_animal["Id_maturidade_sexual"];

header('location:index_admin.php');