<?php
require('pdf.php');
$pdf = new PDF();
// Column headings
// print_r($trans);
$header1 = array('Id User', 'Date', 'Total Transactions');
$header2 = array('Year','Month', 'Total Transactions / Month');
// Data loading
$data1 = $pdf->LoadData($trans);
$data2 = $pdf->LoadData($monthly);
//print_r($data);
$pdf->SetFont('Arial','',14);
$pdf->AddPage('L','A4','');
$pdf->BasicTable($header1,$data1);
$pdf->BasicTable($header2,$data2);
$pdf->Output();
?>