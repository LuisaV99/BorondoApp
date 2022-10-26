<?php
require('fpdf.php');
include '../model/conexion.php';

class PDF extends FPDF
{

    // Cabecera de página
    function Header()
    {
        $this->SetDrawColor(148,148,148);
        $this->SetLineWidth(.3);
        $this->SetTitle('Usuarios con más reservas', true);
 
        
        
        // Logo
        $this->Image('../images/logo2.png',10,4,20);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(50);
        
        // Título
        // $this->SetTextColor (255,153,0);
        
        $this->Cell(40,10, utf8_decode('USUARIOS CON MÁS RESERVAS'));
        // Salto de línea
        $this->Ln(20);
        
        
        
        //las sumas de los primeros valoren deben dar un total de 180 por tamaño
        $this->SetTextColor (65,88,208);


    $this->Cell(50,10, 'Nombres',1,0,'C',0);
    $this->Cell(30,10, 'Apellidos',1,0,'C',0);
    $this->Cell(70,10, 'Correo',1,0,'C',0);
    $this->Cell(30,10, 'Reservas',1,1,'C',0);

 
}
 
 
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
// Creación del objeto de la clase heredada
 
$Consulta = "SELECT usuarios.Documento, usuarios.Nombres, usuarios.Apellidos, usuarios.Correo, COUNT(reservas.Documento) as NReservas FROM reservas INNER JOIN usuarios on usuarios.Documento=reservas.Documento GROUP BY reservas.Documento ORDER BY reservas.Documento DESC";
$result = mysqli_query($conx, $Consulta);
 
 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Helvetica','',12);
$pdf->SetDrawColor(148,148,148);
$pdf->SetLineWidth(.3);    


for($i=1;$i<=40;$i++)
    // $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
 
    while ($show=$result->fetch_assoc()){
        $pdf->Cell(50,10, $show['Nombres'],1,0,'C',0);
        $pdf->Cell(30,10, $show['Apellidos'],1,0,'C',0);
        $pdf->Cell(70,10, $show['Correo'],1,0,'C',0);
        $pdf->Cell(30,10, $show['NReservas'],1,1,'C',0);

    }
$pdf->Output();
