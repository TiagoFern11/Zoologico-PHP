<?php
include '../Componentes/conexao.php';
$id_animal=$_GET["id_animal"];

$sql_delete_animal="DELETE FROM animal WHERE Id_animal=$id_animal";
echo "<br>".$sql_delete_animal;
$res_animal = $pdo->query($sql_delete_animal);

