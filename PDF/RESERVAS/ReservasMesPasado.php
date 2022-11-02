<?php
require('../fpdf.php');
include '../../model/conexion.php';
 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../images/logo2.png',10,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->SetDrawColor(148,148,148);
    $this->SetLineWidth(.3);
    $this->SetTitle('ReservasMesActual');
    $this->SetTextColor(65,88,208);
    $this->Cell(30,10,'Resrvas del mes actual',);
    // Salto de línea
    $this->Ln(20);
 
   //las sumas de los primeros valoren deben dar un total de 80 por tamaño
   $this->Cell(108,10, 'Quien',1,0,'C',0);
   $this->Cell(40,10, 'Donde',1,0,'C',0);
   $this->Cell(17,10, 'N.Entr',1,0,'C',0);
   $this->Cell(25,10, 'Precio',1,1,'C',0);
 
 
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
 
$Consulta = "SELECT * FROM reservas INNER JOIN usuarios ON reservas.Documento=usuarios.Documento WHERE PERIOD_DIFF(DATE_FORMAT(NOW(),'%Y%m'),DATE_FORMAT(FechaRgR,'%Y%m'))=1";
$result = mysqli_query($conx, $Consulta);
 
 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    // $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
 
    while ($show=$result->fetch_assoc()){
        $pdf->Cell(31,10, $show['Documento'],1,0,'C',0);
        $pdf->Cell(77,10, $show['Correo'] ,1,0,'C',0);
        $pdf->Cell(40,10, $show['Nombre'] ,1,0,'C',0);
        $pdf->Cell(17,10, $show['N_Entradas'] ,1,0,'C',0);
        $pdf->Cell(25,10, $show['Total'],1,1,'C',0);
    }
$pdf->Output();
?>
