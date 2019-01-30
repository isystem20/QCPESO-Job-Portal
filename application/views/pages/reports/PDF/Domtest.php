<?php


$html = '<html><body><p>Hello world!</p></body></html>';

$dompdf = new DOMPDF(); 
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");