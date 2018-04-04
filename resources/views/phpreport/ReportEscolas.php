<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('/opt/lampp/htdocs/simrede/class/tcpdf/tcpdf.php');
include_once ("/opt/lampp/htdocs/simrede/class/PHPJasperXML.inc.php");
include_once ('/opt/lampp/htdocs/simrede/connect.php');

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo
$distrito=$_POST["distrito"]; //recebendo o parâmetro que vem do formulário
$articulador=$_POST["articulador"]; //recebendo o parâmetro que vem do formulário
$lab=$_POST["lab"]; //recebendo o parâmetro que vem do formulário
$internet=$_POST["internet"]; //recebendo o parâmetro que vem do formulário

$PHPJasperXML->arrayParameter=  ["distrito"=>$distrito,"articulador"=>$articulador,"lab"=>$lab,"internet"=>$internet];


$PHPJasperXML->load_xml_file("/sglab/jrxmlreport/ReportEscolas.jrxml");


$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

