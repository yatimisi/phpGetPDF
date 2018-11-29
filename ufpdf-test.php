<?php

define('FPDF_FONTPATH', 'font/');
include_once('pdf/ufpdf.php');

$pdf = new UFPDF();
$pdf->Open();
$pdf->SetTitle("UFPDF is Cool.\nUfpdf is Cool");
$pdf->SetAuthor('Steven Wittens');
$pdf->AddFont('LucidaSansUnicode', '', 'lsansuni.php');
$pdf->AddPage();
$pdf->SetFont('LucidaSansUnicode', '', 32);
$pdf->Write(12, "Monhtax ha anapmehsa c-msa.\n");
$pdf->Write(12, "UFPDF");
$pdf->Write(12, "is Cool.\n");
$pdf->Close();
$pdf->Output('unicode.pdf', 'I');

?>