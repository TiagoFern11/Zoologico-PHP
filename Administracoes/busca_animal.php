<?php
include '../Componentes/conexao.php';

$sql_risco="SELECT * FROM risco";
$result_risco= $pdo->query($sql_risco);
$row_risco=$result_risco->fetch();

$sql_animal="SELECT * FROM animal WHERE Id_animal=".$_GET["id_animal"];
$result_animal=$pdo->query($sql_animal);
$row_animal=$result_animal->fetch();

$id_atividade=$row_animal["Id_atividade"];
$id_vida_social=$row_animal["Id_vida_social"];
$id_dieta=$row_animal["Id_dieta"];
$id_reproducao=$row_animal["Id_reproducao"];
$id_n_animais=$row_animal["Id_n_animais"];
$id_gestacao=$row_animal["Id_gestacao"];
$id_maturidade_sexual=$row_animal["Id_atividade"];

$sql_sel_atividade="SELECT * FROM atividade WHERE Id_atividade='$id_atividade'";
$resatividade = $pdo->query($sql_sel_atividade);
$n_atividade = $resatividade->fetch();

$sql_select_vida_social="SELECT * FROM vida_social where Id_vida_social='$id_vida_social'";
$resvida_social = $pdo->query($sql_select_vida_social);
$n_vida_social = $resvida_social->fetch();

$sql_select_dieta="SELECT * FROM dieta where Id_dieta='$id_dieta'";
$resdieta = $pdo->query($sql_select_dieta);
$n_dieta = $resdieta->fetch();

$sql_select_reproducao="SELECT * FROM reproducao where Id_reproducao='$id_reproducao'";
$resreproducao = $pdo->query($sql_select_reproducao);
$n_reproducao = $resreproducao->fetch();

$sql_select_n_animais="SELECT * FROM n_animais where Id_n_animais='$id_n_animais'";
$resn_animais = $pdo->query($sql_select_n_animais);
$n_n_animais = $resn_animais->fetch();

$sql_select_gestacao="SELECT * FROM gestacao where Id_gestacao='$id_gestacao'";
$resgestacao = $pdo->query($sql_select_gestacao);
$n_gestacao = $resgestacao->fetch();

$sql_select_maturidade_sexual="SELECT * FROM maturidade_sexual where Id_maturidade_sexual='$id_maturidade_sexual'";
$resmaturidade_sexual = $pdo->query($sql_select_maturidade_sexual);
$n_maturidade_sexual = $resmaturidade_sexual->fetch();
/*
$sqlimgimg="SELECT * FROM imagem_animal where Imagem='$caminho_imagem'";
$resimg = $pdo->query($sqlimgimg);
$n_imagem = $resimg->fetch();
echo $n_imagem."<br>";
*/