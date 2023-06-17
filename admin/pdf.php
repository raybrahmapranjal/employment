<?php
require_once('fpdf/fpdf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $caste = $_POST['caste'];

    // Create new PDF document
    $pdf = new FPDF();
    $pdf->AddPage();


    // Set document information
    $pdf->SetFont("Arial", "", 12);
$pdf->Cell(0, 10, "GOVERNMENT OF ASSAM", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "SKILL, EMPLOYMENT & ENTREPRENEURSHIP DEPARTMENT", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "DISTRICT EMPLOYMENT EXCHANGE", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(103, 5, "CATEGORY:", 0, 0, 'R');
$pdf->Cell(0, 5, $caste, 0, 1, 'L');
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "IDENTITY CARD", 0, 0, 'C');
$pdf->Ln();

// Rest of your code...

// page border
     $pdf->Rect(10, 10, $pdf->GetPageWidth() - 20, $pdf->GetPageHeight() - 20);
    
   

    // Output table data
    $pdf->Cell(50, 10, '1. Name:', 1);
    $pdf->Cell(0, 10, $name, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '2. Email:', 1);
    $pdf->Cell(0, 10, $email, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '3. Phone:', 1);
    $pdf->Cell(0, 10, $phone, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '4. City:', 1);
    $pdf->Cell(0, 10, $city, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '5. State:', 1);
    $pdf->Cell(0, 10, $state, 1);
    $pdf->Ln();

    // Output the PDF as a download
    $pdf->Output();
}
?>
