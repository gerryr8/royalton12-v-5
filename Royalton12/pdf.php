<?php
require('fpdf/fpdf.php');

include "dataseconect.php";

$id=$_GET['id'];

echo $id;

$select="SELECT * FROM resguardos WHERE id_form='$id' ";

$resu=mysqli_query($conn, $select);
    
    $row = mysqli_fetch_assoc($resu);


    session_start();

$_SESSION['nombres']=$row['nombres'];    
$_SESSION['departamento']=$row['departamento'];
$_SESSION['puesto']=$row['puesto'];
$_SESSION['n_anfitrion']=$row['n_anfitrion'];   




if(empty($row['nhotel'])){

    $_SESSION['nhotel']="";  
   } else{

    $_SESSION['nhotel']="x";  
     
 }

 if(empty($row['npost'])){
    $_SESSION['npost']="";   
   
} else{

 $_SESSION['npost']="x";   
  
}

if(empty($row['nspa'])){

    $_SESSION['nspa']=""; 
} else{

 $_SESSION['nspa']="x";   
  
}

 if(empty($row['nchange'])){
   
 $_SESSION['nchange']="";  
} else{

 $_SESSION['nchange']="x";   
  
}

if(empty($row['usremoto'])){
    $_SESSION['usremoto']="";   
} else{

 $_SESSION['usremoto']="x";   
  
}
if(empty($row['correo'])){
    $_SESSION['correo']="";  
   
} else{

 $_SESSION['correo']="x";   
  
}

if(empty($row['internet'])){
    $_SESSION['internet']="";  
   
} else{

 $_SESSION['internet']="x";   
  
}

if(empty($row['pin'])){
    $_SESSION['pin']="";   
} else{

 $_SESSION['pin']="x";   
  
}
if(empty($row['vincard'])){
    
 $_SESSION['vincard']="";   
   
} else{

 $_SESSION['vincard']="x";   
  
}
if(empty($row['aplicativo'])){
    $_SESSION['aplicativo']="";   
   
} else{

 $_SESSION['aplicativo']="x";   
  
}

if(empty($row['asistencia'])){
    $_SESSION['asistencia']="";   
   
} else{

 $_SESSION['asistencia']="x";   
  
}
if(empty($row['zafiro'])){
    $_SESSION['zafiro']="";   
   
} else{

 $_SESSION['zafiro']="x";   
  
}

if(empty($row['verkada'])){
    $_SESSION['verkada']="";  
   
} else{

 $_SESSION['verkada']="x";   
  
}























/*
$name= $row['nombres'];
$dep= $row['departamento'];
$pos= $row['puesto'];
$number= $row['n_anfitrion'];
*/


header("location: genpdf.php");

/*

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
$pdf->Cell(10,204,'x');

//usuario
$pdf->Cell(45);
$pdf->Cell(10,204,'x');

//visonline
$pdf->Cell(49);
$pdf->Cell(10,204,'x');


$pdf->Ln(7);


//new post
$pdf->Cell(62.5);
$pdf->Cell(10,204,'x');

//correp
$pdf->Cell(45);
$pdf->Cell(10,204,'x');

//abril aplicativo
$pdf->Cell(49);
$pdf->Cell(10,204,'x');


$pdf->Ln(7.2);
//new spa
$pdf->Cell(62.5);
$pdf->Cell(10,204,'x');

//internet
$pdf->Cell(45);
$pdf->Cell(10,204,'x');

//abril asistencia web
$pdf->Cell(49);
$pdf->Cell(10,204,'x');


$pdf->Ln(6.8);
//new change
$pdf->Cell(62.5);
$pdf->Cell(10,204,'x');

//pin
$pdf->Cell(45);
$pdf->Cell(10,204,'x');

//zafiro
$pdf->Cell(49);
$pdf->Cell(10,204,'x');

$pdf->Ln(6);
//verkada
$pdf->Cell(176.5);
$pdf->Cell(10,204,'x');


$pdf->Ln(126.7);

$pdf->Cell(34);
$pdf->Cell(0,10, 'gerardo');

$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,'TIC');
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,'Puesto');
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,'546');
$pdf->Ln(5.8);
$pdf->Cell(34);
$pdf->Cell(0,10,'02-08-2022');
$pdf->Ln(5.8);

$pdf->Output();


/*/





?>