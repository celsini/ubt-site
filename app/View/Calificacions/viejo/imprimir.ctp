<?php
App::import('Vendor','tcpdf/tcpdf');
$tcpdf = new TCPDF();
$tcpdf->SetPrintHeader(false);
$tcpdf->SetPrintFooter(false);
$tcpdf->AddPage();

// LOGO
$html = '
<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
<tr><td style="text-align:center;">'.$this->Html->image('logo.png', array('alt' => 'logo',"align"=>"middle","border"=>"0","width"=>"80px","height"=>"150px")).'</td></tr>

</table>';

// output the HTML content
$tcpdf->writeHTML($html, false, false, false, false, '');


// IDENTIFICACION UNIVERSIDAD
$tcpdf->SetFont('helvetica', 'BI', 13);
$txt = <<<EOD
UNIVERSIDAD BOLIVARIANA DE TRABAJADORES ¨JESÚS RIVERO¨
COMISION PERMANENTE DE AUTOCONTROL Y ARCHIVO
SECRETARIA
EOD;
$tcpdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

        
$tcpdf->SetFont('helvetica', 'BI', 15);   
$txt = <<<EOD
    
CERTIFICACION DE NOTAS
EOD;
$tcpdf->Write($h=0, $txt, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);


$tcpdf->SetFont('helvetica', '', 12); 

$coor = $estudiante['Estudiante']['nom1coor'] ." ". $estudiante['Estudiante']['ape1coor'];
$cicoor = $estudiante['Estudiante']['cicoor'];
$cen = $estudiante['Estudiante']['tx_centroformacion'];
$est = $estudiante['Estudiante']['tx_nombre1'] ." ". $estudiante['Estudiante']['tx_nombre1']." ". $estudiante['Estudiante']['tx_apellido1']." ". $estudiante['Estudiante']['tx_apellido2'];
$ci = $estudiante['Estudiante']['co_cedula'];
$fecha = $estudiante['Estudiante']['fe_nacimiento'];
$lugar = $estudiante['Estudiante']['tx_lugar_nacimiento'];
$pnf = $estudiante['Estudiante']['pnf'];
$copnf = $estudiante['Estudiante']['tx_codigointerno_ubt'];
$unidad = $estudiante['Estudiante']['tx_unidadformacion'];
$mun = $estudiante['Estudiante']['tx_municipio'];
$edo = $estudiante['Estudiante']['tx_estado'];
$dia = date("d",time());
$mes = date("m",time());
$meses = array("01"=>"ENERO","02"=>"FEBRERO","03"=>"MARZO","04"=>"ABRIL","05"=>"MAYO","06"=>"JUNIO","07"=>"JULIO","08"=>"AGOSTO","09"=>"SEPTIEMBRE","10"=>"OCTUBRE","11"=>"NOVIEMBRE","12"=>"DICIEMBRE");
$mes = ucfirst(strtolower($meses[$mes]));
$ano = date("y",time());
$sector= ucfirst(strtolower($estudiante['Estudiante']['tx_sector']));


$html = "
<table cellpadding='1' cellspacing='1' border='0' style='text-align:center;'>
<tr><td>&nbsp;</td></tr>
<tr><td style='text-align:justify;'>Quien suscribe, <u>$coor</u> Titular de la Cédula de de Identidad N° <u>$cicoor</u> Coordinador de la Comisión Permanente de Autocontrol y Archivo,  hace constar por medio de la presente que en los archivos del Centro de Formación <u>$cen</u>, reposan las notas del trabajador-estudiante: </td></tr>
<tr><td>&nbsp;</td></tr>
</table>";

// output the HTML content
$tcpdf->writeHTML($html, false, false, false, false, '');


$tcpdf->SetFont('helvetica', 'BI', 13);   
$tcpdf->Write($h=0, $est, $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

$tcpdf->SetFont('helvetica', '', 12); 
$html = "
<table cellpadding='1' cellspacing='1' border='0' style='text-align:center;'>
<tr><td>&nbsp;</td></tr>
<tr><td style='text-align:justify;'>Titular de la Cédula de Identidad <u>$ci</u>, quien nació en <u>$lugar</u> nacsub el <u>$fecha</u> desarrolló el Programa Nacional de Formación <u>$pnf</u> identificado con el Código Interno <u>$copnf</u> en  la Unidad de Formación <u>$unidad</u>, ubicada en <u>$mun</u> jurisdicción de la entidad federal <u>$edo</u> obteniendo los siguientes resultados:</td></tr>
</table>";

// output the HTML content
$tcpdf->writeHTML($html, false, false, false, false, '');


$html = "
<table cellpadding='1' cellspacing='1' border='0' style='text-align:center;'>
<tr><td>&nbsp;</td></tr>
<tr><td style='text-align:justify;'>Las notas mínimas aprobatorias de 12 y 16 puntos aplican a los periodos posteriores a 2012 y anterior a éste período la nota mínima Aprobatoria es de 12 y 16 puntos; por excepción la escala del 1 al 5 aplica para el periodo 2011. También son aprobatorias las notas (A) y (C). </td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td style='text-align:justify;'>Esta certificación consta de páginas cuyos seriales son XXXX,  XXXXX, XXXXX y es la N° XXX  de éste año, la cual se expide a solicitud de la parte interesada en la ciudad de <u>$sector</u> a los <u>$dia</u> días del mes de <u>$mes</u> de dos mil <u>$ano</u>.    </td></tr>

</table>";

// output the HTML content
$tcpdf->writeHTML($html, false, false, false, false, '');



//
//$tcpdf->SetAutoPageBreak(true);
//
//$tcpdf->setPrintHeader(false);
//$tcpdf->setPrintFooter(false);
//
//$tcpdf->SetTextColor(0, 0, 0);
//$tcpdf->SetFont($textfont,'',9);


$tcpdf->Output('CertificadoDeNotas.pdf', 'D');
?>

