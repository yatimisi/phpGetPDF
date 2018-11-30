<?php

define('FPDF_FONTPATH', 'pdf/font/');
include_once('pdf/ufpdf.php');

$pdf = new UFPDF();
$pdf->Open();
$pdf->SetTitle("testTitle"); //標題
$pdf->SetAuthor('Steven Wittens'); //作者
$pdf->AddFont('LucidaSansUnicode', '', 'lsansuni.php');
$pdf->AddPage();
$pdf->SetFont('LucidaSansUnicode', '', 32);
$pdf->Write(12, "line");
$pdf->Write(12, "line2\n");
$pdf->Write(12, "line3\n");

$pdf->Close();
$pdf->Output('unicode.pdf', 'I');

?>
