<?php

require_once __DIR__ . '/vendor/autoload.php';

//variables
$Name = $_POST['sname'];
$Regno = $_POST['sreg'];


$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A7-L']);
//$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkImage('logo.jpeg');
$mpdf->showWatermarkImage = true;
$mpdf->SetWatermarkText('This is a genuine gatepass');
$mpdf->showWatermarkText = true;
// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'utf-8', [190, 236]]);

//create pdf
$data = '';

//$data.= '<body style=background-color="brown"></body>';
$data .='<img src="logo.jpeg" width="30px" height="30px">';
$data .= '<large>CHUKA UNIVERSITY</large><br/> ';
$data .= '<small>Sapientia Divitia Est - Knowledge is Wealth<small> <br/>';
$data .= '<strong>Name:</strong>'. $Name . '<br/>';
$data .= '<strong>Regno:</strong>'. $Regno . '<br/>';
$data .= '<small>Valid until December 2019</small> <br/>';
$data .= '<small>Signed by:</small> <br/>';
$data .='<img src="signature.jpg" width="30px" height="30px">';
$data .= '<small>Director Finance</small> <br/>';




//write pdf
$mpdf->WriteHTML($data);
//output
$mpdf->Output('gatepass.pdf', 'D');
// $mpdf->Output($location . 'test.pdf', \Mpdf\Output\Destination::FILE);
?>



