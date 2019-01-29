<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Quezon City Public Employment Service Office');
$pdf->SetTitle('QC PESO Certificate of Accreditation');
$pdf->SetSubject('QC PESO Certificate of Accreditation');
$pdf->SetKeywords('QC PESO Certificate of Accreditation, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH,PDF_SUB_HEADER_STRING,PDF_HEADER_TITLE);

// $pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
// $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$pdf->Image('themes/admin-pro/assets/images/qcpeso.png', 80, 30, 50, 50, 'PNG', '', '', true, 150, '', false, false, '', false, false, false);
// $pdf->Image('themes/admin-pro/assets/images/2000px-Quezon_City.svg.png', 180, 5, 20, 20, 'PNG', '', '', true, 150, '', false, false, '', false, false, false);
// Set some content to print
$companyname = '';
$companyadd = '';
$date ='';
$yrdate ='';
$id='';


if ($accredit->num_rows() > 0) {
    foreach($accredit->result() as $row) {
    	$companyname = $row->CompanyName;
    	$companyadd = $row->CompanyAddress;
    	$date = $row->CreatedAt;
    	$yrdate = date('Y',strtotime($row->CreatedAt));
    	$id = substr($row->Id,0,8);
    }


        }
$html = '
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1 align="Center">CERTIFICATE OF ACCREDITATION</h1>
<h2 align="Center">NO. QC-TCFO-PESO-'.$yrdate.'-'.$id.'
<br>
<br>
<br>
</h2>
<p align="center">This is to Certify that
<br>
<br></p>
';
$html.= '
<h1 align="Center">'.$companyname.'</h1>
<h4 align="Center">'.$companyadd.'</h4>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;having met the requirements set under Republic Act 8759, otherwise known as the Public Employment Act of 1999, as amended by Republic Act. No. 10691 is hereby accredited as a legitimate Job Placement Office established to provide employment facilitation services to its applcants and coordinate its activities with the LGU PESO.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$date.', Quezon City Philippines.
<br>
<br>
<br></p>
<p><b>APPROVED:</b><br><br></p>


<p align="left"><b>CARLO MAGNO E. ABELLA</b></p>
<p align="left">PESO Manager</p>
</H3>


';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('QcpesoAccreditation.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
