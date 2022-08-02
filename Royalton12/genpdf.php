<?php 

require('fpdf/fpdf.php');

include "dataseconect.php";

session_start();

$name= $_SESSION['nombres'];
$dep= $_SESSION['departamento'];
$pos= $_SESSION['puesto'];
$number= $_SESSION['n_anfitrion'];


$nhotel=$_SESSION['nhotel'];
$npost= $_SESSION['npost'];


$nspa= $_SESSION['nspa'];
$nchange= $_SESSION['nchange'];
$usremoto= $_SESSION['usremoto'];
$correo= $_SESSION['correo'];
$internet= $_SESSION['internet'];
$pin= $_SESSION['pin'];
$vincard= $_SESSION['vincard'];
$aplicativo = $_SESSION['aplicativo'];
$asistencia= $_SESSION['asistencia'];
$zafiro= $_SESSION['zafiro'];
$verkada= $_SESSION['verkada'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('form3.jpg',-5,0,220);

    // Salto de línea
    $this->Ln(10);
}


}



// Creación del objeto de la clase heredada
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
//nwe hotel
$pdf->Cell(62.5);
$pdf->Cell(10,204, $nhotel);

//usuario remoto
$pdf->Cell(45);
$pdf->Cell(10,204,$usremoto);

//visonline vincard
$pdf->Cell(49);
$pdf->Cell(10,204,$vincard);


$pdf->Ln(7);


//new post
$pdf->Cell(62.5);
$pdf->Cell(10,204, $npost);

//correp
$pdf->Cell(45);
$pdf->Cell(10,204,$correo);

//abril aplicativo
$pdf->Cell(49);
$pdf->Cell(10,204,$aplicativo);


$pdf->Ln(7.2);
//new spa
$pdf->Cell(62.5);
$pdf->Cell(10,204, $nspa);

//internet
$pdf->Cell(45);
$pdf->Cell(10,204, $internet);

//abril asistencia web
$pdf->Cell(49);
$pdf->Cell(10,204,$asistencia);


$pdf->Ln(6.8);
//new change
$pdf->Cell(62.5);
$pdf->Cell(10,204,$nchange);

//pin
$pdf->Cell(45);
$pdf->Cell(10,204,$pin);

//zafiro
$pdf->Cell(49);
$pdf->Cell(10,204,$zafiro);

$pdf->Ln(6);
//verkada
$pdf->Cell(176.5);
$pdf->Cell(10,204,$verkada);


$pdf->Ln(126.7);

$pdf->Cell(34);
$pdf->Cell(0,10, $name);

$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,$dep);
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,$pos);
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,$number);
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,'02-08-2022');
$pdf->Ln(5.8);

$pdf->Output();


?>