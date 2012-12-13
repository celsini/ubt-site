<?php
// DATA

/*
$coor = $estudiante['Estudiante']['nom1coor'] ." ". $estudiante['Estudiante']['ape1coor'];
$cicoor = $estudiante['Estudiante']['cicoor'];*/

$coor = $coordinador[0]['Coordinador']['coordinador'];
$cicoor = $coordinador[0]['Coordinador']['co_cedula'];
$cen = $estudiante['Estudiante']['tx_centroformacion'];
$est = $estudiante['Estudiante']['tx_nombre1'] ." ". $estudiante['Estudiante']['tx_nombre1']." ". $estudiante['Estudiante']['tx_apellido1']." ". $estudiante['Estudiante']['tx_apellido2'];
$ci = $estudiante['Estudiante']['co_cedula'];
$lugar = $estudiante['Estudiante']['tx_lugar_nacimiento'];
$pnf = $estudiante['Estudiante']['pnf'];
$copnf = $estudiante['Estudiante']['tx_codigointerno_ubt'];
$unidad = $estudiante['Estudiante']['tx_unidadformacion'];
$mun = $estudiante['Estudiante']['tx_municipio'];
$edo = $estudiante['Estudiante']['tx_estado'];
$serial = $estudiante['Estudiante']['tx_serial'];
$correlativo = $estudiante['Estudiante']['nu_correlativo'];
$dia = date("d",time());
$mes = date("m",time());
$meses = array("01"=>"ENERO","02"=>"FEBRERO","03"=>"MARZO","04"=>"ABRIL","05"=>"MAYO","06"=>"JUNIO","07"=>"JULIO","08"=>"AGOSTO","09"=>"SEPTIEMBRE","10"=>"OCTUBRE","11"=>"NOVIEMBRE","12"=>"DICIEMBRE");
$mes = ucfirst(strtolower($meses[$mes]));
$ano = date("y",time());
$sector= ucfirst(strtolower($estudiante['Estudiante']['tx_sector']));
$filas = "";
$puntos = array("1"=>"UNO","2"=>"DOS","3"=>"TRES","4"=>"CUATRO","5"=>"CINCO","6"=>"SEIS","7"=>"SIETE","8"=>"OCHO","9"=>"NUEVE","10"=>"DIEZ","11"=>"ONCE","12"=>"DOCE","13"=>"TRECE","14"=>"CATORCE","15"=>"QUINCE","16"=>"DIECISEIS","17"=>"DIECISIETE","18"=>"DIECIOCHO","19"=>"DIECINUEVE","20"=>"VEINTE");


// PDF

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
$tcpdf->Ln(5);


$tcpdf->SetFont('helvetica', '', 12); 

// PARRAFO 1
$html = <<<EOF
<style>
	p.second {
		font-size: 11pt;
		text-align: justify;
	}	
</style>
<p class="second">Quien suscribe, <u>$coor</u> Titular de la Cédula de de Identidad N° <u>$cicoor</u> Coordinador de la Comisión Permanente de Autocontrol y Archivo,  hace constar por medio de la presente que en los archivos del Centro de Formación <u>$cen</u>, reposan las notas del trabajador-estudiante:</p>
EOF;

$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Ln(5);

// PARRAFO 2
$html = <<<EOF
<style>
	p.second {
		font-size: 11pt;
		text-align: justify;
	}	
</style>
<p class="second">Titular de la Cédula de Identidad <u>$ci</u>, quien nació en <u>$lugar</u> el <u>$fecha</u> desarrolló el Programa Nacional de Formación <u>$pnf</u> identificado con el Código Interno <u>$copnf</u> en  la Unidad de Formación <u>$unidad</u>, ubicada en <u>$mun</u> jurisdicción de la entidad federal <u>$edo</u> obteniendo los siguientes resultados:</p>
EOF;

$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Ln(5);


// NOTAS

foreach ($notas as $nota) {
    $tuc = $nota['Nota']['tx_unidad_curricular'];
    $uc = $nota['Nota']['nu_uc'];
    $pe = $nota['Nota']['tx_periodo'];
    $cal = $nota['Nota']['nu_calificacion'];
    $punto = $puntos[$cal];
    //$filas .= "<tr><td align='center' width='40%'>$tuc</td><td align='center' width='15%'>$cal</td><td align='center'width='15%'>$punto</td><td align='center'width='15%'>$uc</td><td align='center'width='15%'>$pe</td></tr>";
    $filas .= '<tr><td align="left" width="60%">'.$tuc.'</td><td align="center" width="5%">'.$cal.'</td><td align="center" width="15%">'.$punto.'</td><td align="center" width="5%">'.$uc.'</td><td align="center" width="15%">'.$pe.'</td></tr>';
    
    $tuc='';
    $cal='';
    $punto='';
    $uc='';
    $pe='';
}   


$tbl = <<<EOD
<style>
	table.second {
		font-size: 10pt;
	}	
</style>
<table border="1" cellpadding="2" cellspacing="0" nobr="true" class="second">
 <tr>
  <td align="center" width="60%"><strong>UNIDAD CURRICULAR</strong></td>
  <td COLSPAN="2" align="center" width="20%"><strong>NOTA</strong></td>
  <td align="center" width="5%"><strong>UC</strong></td>
  <td align="center" width="15%"><strong>PERIODO</strong></td>
 </tr>
$filas
</table>
EOD;

$tcpdf->writeHTML($tbl, true, false, false, false, '');

// FIN NOTAS



$tbl = <<<EOD
<style>
	table.second {
		font-size: 10pt;
	}	
</style>
<table border="1" cellpadding="2" cellspacing="0" nobr="true" class="second">
 <tr>
  <td align="center"><strong>ESCALA</strong></td>
  <td align="center"><strong>MINIMA <BR /> APROBATORIA</strong></td>
  <td align="center"><strong>MINIMA <BR /> APROBATORIA <BR /> PROYECTO</strong></td>
  <td align="center"><strong>PROMEDIO</strong></td>
 </tr>
 <tr>
    <td align="center">DEL 1 AL 20</td>
    <td align="center">10 PUNTOS</td>
    <td align="center">12 PUNTOS</td>
    <td align="center">&nbsp;</td>
 </tr>
 <tr>
    <td align="center">DEL 1 AL 20</td>
    <td align="center">12 PUNTOS</td>
    <td align="center">16 PUNTOS</td>
    <td align="center">&nbsp;</td>
 </tr>
 <tr>
    <td align="center">DEL 1 AL 5</td>
    <td align="center">3 PUNTOS</td>
    <td align="center">3 PUNTOS</td>
    <td align="center">&nbsp;</td>
 </tr>
  <tr>
    <td align="center">A</td>
    <td align="center">APROBADA</td>
    <td align="center">APROBADA</td>
    <td align="center">***********</td>
 </tr>
  <tr>
    <td align="center">C</td>
    <td align="center">APROBADA</td>
    <td align="center">APROBADA</td>
    <td align="center">***********</td>
 </tr>
</table>
EOD;

$tcpdf->writeHTML($tbl, true, false, false, false, '');


// PARRAFO 3
$html = <<<EOF
<style>
	p.second {
		font-size: 11pt;
		text-align: justify;
	}	
</style>
<p class="second">Las notas mínimas aprobatorias de 12 y 16 puntos aplican a los periodos posteriores a 2012 y anterior a éste período la nota mínima Aprobatoria es de 12 y 16 puntos; por excepción la escala del 1 al 5 aplica para el periodo 2011. También son aprobatorias las notas (A) y (C).</p>
EOF;

$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Ln(5);

// PARRAFO 4
$html = <<<EOF
<style>
	p.second {
		font-size: 11pt;
		text-align: justify;
	}	
</style>
<p class="second">Esta certificación consta de XXX páginas cuyos seriales son <u>$serial</u> y es la N° <u>$correlativo</u>  de este año, la cual se expide a solicitud de la parte interesada en la ciudad de <u>$sector</u> a los <u>$dia</u> días del mes de <u>$mes</u> de dos mil <u>$ano</u>.</p>
EOF;

$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Ln(5);



$secretario = $directiva[0]['Directiva']['secretario'];
$vocero = $directiva[0]['Directiva']['vocero'];

//
//$tcpdf->SetAutoPageBreak(true);
//
//$tcpdf->setPrintHeader(false);
//$tcpdf->setPrintFooter(false);
//
//$tcpdf->SetTextColor(0, 0, 0);
//$tcpdf->SetFont($textfont,'',9);


$tbl = <<<EOD
<style>
	p.second {
		font-size: 11pt;
		text-align: justify;
	}	
</style>
<table border="0" cellpadding="2" cellspacing="2" nobr="true" class="second">
 <tr>
  <td align="center">&nbsp;</td>
  <td align="center">&nbsp;</td>
 </tr>
 <tr>
  <td align="center">$secretario <BR />Secretario <br />UBTJR</td>
  <td align="center">$vocero <BR />Vocero Comisión Nacional  <BR />
Autocontrol y Archivo</td>
 </tr>
</table>
EOD;

$tcpdf->writeHTML($tbl, true, false, false, false, '');


$tcpdf->Output($ci.'.pdf', 'D');
?>

