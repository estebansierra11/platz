<?php
require('pdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(70,10,'Reporte',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->cell(30, 10, 'id', 1, 0, 'C', 0);
  $this->cell(30, 10, 'placa', 1, 0, 'C', 0);
  $this->cell(30, 10, 'modelo', 1, 0, 'C', 0);
    $this->cell(30, 10, 'marca', 1, 0, 'C', 0);
      $this->cell(30, 10, 'capacidad', 1, 0, 'C', 0);
        $this->cell(30, 10, 'cliente', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'cn.php';
$consulta="SELECT * FROM vehiculo";
$resultado=$mysqli->query($consulta);




$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
while ($row = $resultado->fetch_assoc()) {
    $pdf->cell(30, 10, $row['id_usuarios'], 1, 0, 'C', 0);
  $pdf->cell(30, 10, $row['placa'], 1, 0, 'C', 0);
  $pdf->cell(30, 10, $row['modelo'], 1, 0, 'C', 0);
    $pdf->cell(30, 10, $row['marca'], 1, 0, 'C', 0);
      $pdf->cell(30, 10, $row['capacidad'], 1, 0, 'C', 0);
        $pdf->cell(30, 10, $row['cliente'], 1, 1, 'C', 0);

  // code...
}
$pdf->Output();
?>
