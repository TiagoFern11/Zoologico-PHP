<?php
include '../Componentes/conexao.php';


$sqlanimal="SELECT * FROM animal Where Id_animal='$id_animal'";
$res = $pdo->query($sqlanimal);
$row_animal=$res->fetch();

$sql_delete_atividade="DELETE FROM atividade WHERE Id_atividade=".$row_animal["Id_atividade"];
$result_atividade=$pdo->query($sql_delete_atividade);
header('location:index_admin.php');

$sql_delete_vida_social="DELETE FROM vida_social WHERE Id_vida_social='".$row_animal["Id_vida_social"]."'";
$res_vida_social = $pdo->query($sql_delete_vida_social);
    
$sql_delete_dieta="DELETE FROM dieta WHERE Id_dieta='".$row_animal["Id_dieta"]."'";
$res_dieta = $pdo->query($sql_delete_dieta);
    
$sql_delete_reproducao="DELETE FROM reproducao WHERE Id_reproducao='".$row_animal["Id_reproducao"]."'";
$res_reproducao = $pdo->query($sql_delete_reproducao);

$sql_delete_n_animais="DELETE FROM n_animais WHERE Id_n_animais='".$row_animal["Id_n_animais"]."'";
$res_n_animais = $pdo->query($sql_delete_n_animais);
    
$sql_delete_gestacao="DELETE FROM gestacao WHERE Id_gestacao='".$row_animal["Id_n_animais"]."'";
$res_gestacao = $pdo->query($sql_delete_gestacao);

$sql_delete_maturidade_sexual="DELETE FROM maturidade_sexual WHERE Id_maturidade_sexual='".$row_animal["Id_maturidade_sexual"]."'";
$res_maturidade_sexual = $pdo->query($sql_delete_maturidade_sexual);

$sql_delete_animal="DELETE FROM animal WHERE Id_animal='".$row_animal["Id_maturidade_sexual"]."'";
$res_animal = $pdo->query($sql_delete_animal);

