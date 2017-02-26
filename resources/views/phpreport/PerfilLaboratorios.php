<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('/home/aetji649/sglab/class/tcpdf/tcpdf.php');
include_once ("/home/aetji649/sglab/class/PHPJasperXML.inc.php");
include_once ('/home/aetji649/sglab/connect.php');

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo
// $distrito=$_POST["distrito"]; //recebendo o parâmetro do filtro modal
$escola=$_POST["escola"]; //recebendo o parâmetro filtro modal
// $articulador=$_POST["articulador"]; //recebendo o parâmetro filtro modal
// $internet=$_POST["internet"]; //recebendo o parâmetro filtro modal
// $status_lab=$_POST["status_lab"]; //recebendo o parâmetro filtro modal


$PHPJasperXML->arrayParameter=  [
// "distrito"=>$distrito,
// "articulador"=>$articulador,
// "internet"=>$internet,
// "status_lab"=>$status_lab,
"escola"=>$escola
];



$PHPJasperXML->load_xml_file("/home/aetji649/sglab/jrxmlreport/PerfilLaboratorios.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

