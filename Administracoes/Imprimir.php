<?php
include '../Componentes/conexao.php';
$sql="SELECT animal.Nome,risco.Risco,animal.Classe FROM animal
INNER join risco on animal.Id_risco=risco.Id_risco";
$result=$pdo->query($sql);
include ('fpdf/fpdf.php');
$numero_animais = $result->rowCount();
//Initializar as 3 colunas
$column_nome = "";
$column_risco = "";
$column_classe = "";


//Para cada linha adiciona o registo à variável
foreach($result->fetchAll() as $row )
{
    $nome = $row["Nome"];
    $risco = $row["Risco"];
    $classe = $row["Classe"];
   
    $column_nome = $column_nome.$nome."\n";    
    $column_risco = $column_risco.$risco."\n";
    $column_classe = $column_classe.$classe."\n";
     
}

//Criar novo ficheiro PDF
$pdf=new FPDF();
$pdf->AddPage();
//Posição do nome dos campos
$Y_Fields_Name_position = 40;
//Posição dos registos da tabela
$Y_Table_Position = 48;

$pdf->SetFont('Arial','B',30);
$pdf->Cell(200,30,'Lista de Animais',0,1,'C');

 $pdf->SetFillColor(38,255,176);
//Bold para o cabeçalho da tabela
$pdf->SetFont('Arial','B',13);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(55,8,'Risco',1,0,'L',2);
$pdf->SetX(70);
$pdf->Cell(120,8,'Nome',1,0,'L',2);
$pdf->SetX(145);
$pdf->Cell(55,8,'Classe',1,0,'C',2);
$pdf->Ln();

//Mostra as 3 colunas com os seus registos
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(55,10,$column_risco,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(130,10,$column_nome,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(145);
$pdf->MultiCell(55,10,$column_classe,1,'C');


//Criar linhas para separar os registos da tabela
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $numero_animais)
{
    $pdf->SetX(15);
    $pdf->MultiCell(185,10,'',1);
    $i = $i +1;
}

$pdf->Output();
?>
