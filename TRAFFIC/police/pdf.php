<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle the form submission

    // Validate and sanitize input data
    $ID = filter_input(INPUT_POST, "Caseid", FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING);
    $bookingReason = filter_input(INPUT_POST, "bookingReason", FILTER_SANITIZE_STRING);
    $fine = filter_input(INPUT_POST, "fine", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $carsnumber = filter_input(INPUT_POST, "cno", FILTER_SANITIZE_STRING);

    if ($ID && $date && $bookingReason && $fine !== false && $carsnumber) {
        // All data is valid, proceed to create the PDF

        require("C:/xampp/htdocs/TRAFFIC_TANU/fpdf/fpdf.php");

        $pdf = new FPDF();
        $pdf->AddPage();

        // Set font for the title
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 10, "Fine Charged", 1, 1, 'C');

        // Add data to the PDF
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(50, 10, "Case ID:", 0, 0);
        $pdf->Cell(0, 10, $ID, 0, 1);

        $pdf->Cell(50, 10, "Date:", 0, 0);
        $pdf->Cell(0, 10, $date, 0, 1);

        $pdf->Cell(50, 10, "Booking Reason:", 0, 0);
        $pdf->Cell(0, 10, $bookingReason, 0, 1);

        $pdf->Cell(50, 10, "Fine Amount:", 0, 0);
        $pdf->Cell(0, 10, "Rs." . number_format($fine, 2), 0, 1);

        $pdf->Cell(50, 10, "Car's Number:", 0, 0);
        $pdf->Cell(0, 10, $carsnumber, 0, 1);

        $pdf->Output();
    } else {
        // Invalid data, handle the error (e.g., display an error message)
        echo "Invalid data received from the form.";
    }
}
?>
