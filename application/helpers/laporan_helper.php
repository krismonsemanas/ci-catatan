<?php
function laporanPdf($html,$fileName)
{
    $ci = get_instance();
    $ci->load->library('Pdf');
   // create new PDF document
    $obj_pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);  
    $obj_pdf->SetCreator(PDF_CREATOR);  
    $obj_pdf->SetTitle("LAPORAN KEUANGAN BULAN INI");  
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $obj_pdf->SetDefaultMonospacedFont('helvetica');  
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $obj_pdf->SetMargins('12.5', '12.5', '10');  
    $obj_pdf->setPrintHeader(false);  
    $obj_pdf->setPrintFooter(false);  
    $obj_pdf->SetAutoPageBreak(TRUE, 10);  
    $obj_pdf->SetFont('helvetica', '', 12);    
    $obj_pdf->AddPage();
    $obj_pdf->writeHTML($html, true, false, true, false, ''); 
    $obj_pdf->Output($fileName, 'I');  
    
}