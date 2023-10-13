<?php
if (!empty($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    // You should use a forward slash (/) instead of a backslash (\) in the path
    // Also, it's better to use double quotes for the string containing the file path
    require("ffpdf/fpdf.php");

    // Create an instance of the PDF class
    $pdf = new FPDF();
    $pdf->AddPage();
    // Output the PDF to the browser or save it to a file
    
    $pdf->SetFont("Arial","",12);
    $pdf->Cell(0,10,"Registration Details",1,1,'c');
    $pdf->Cell(20,10,"Roll No.",1,0);
    $pdf->Cell(45,10,"First Name",1,0);
    $pdf->Cell(45,10,"Last Name",1,1);

    $pdf->Cell(20,10,"$roll",1,0);
    $pdf->Cell(45,10,"$f_name",1,0);
    $pdf->Cell(45,10,$l_name,1,0);

    $pdf->Output();
}
?>
