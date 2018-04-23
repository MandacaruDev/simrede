<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('/opt/lampp/htdocs/simrede/class/tcpdf/tcpdf.php');
include_once ("/opt/lampp/htdocs/simrede/class/PHPJasperXML.inc.php");
include_once ('/opt/lampp/htdocs/simrede/connect.php');

$PHPJasperXML = new PHPJasperXML();
// $PHPJasperXML->debugsql=true;

//Verificao de campo
if (empty($_REQUEST['ano']))  //verifica se o campo simulado é vazio
    {
    $ano=ano;    //valor em caso de vazio
    
    }        
else
{
    $ano=$_REQUEST['ano'];  //valor am caso diferente de vazio
    
}

//Verificao de campo
if (empty($_REQUEST['codsiem']))  //verifica se o campo simulado é vazio
    {
    $codsiem=codsiem;    //valor em caso de vazio
    
    }        
else
{
    $codsiem=$_REQUEST['codsiem'];  //valor am caso diferente de vazio
    
}


//Verificao de campo
if (empty($_REQUEST['simulado']))  //verifica se o campo simulado é vazio
    {
    $simulado=simulado;     //valor em caso de vazio
        }        
else
{
    $simulado=$_REQUEST['simulado'];  //valor am caso diferente de vazio
    }

//Verificao de campo
if (empty($_REQUEST['nivel']))  //verifica se o campo simulado é vazio
    {
    $nivel=nivel;     //valor em caso de vazio
        }        
else
{
    $nivel=$_REQUEST['nivel'];  //valor am caso diferente de vazio
    }
    
//Verificao de campo
if (empty($_REQUEST['turma']))  //verifica se o campo simulado é vazio
    {
    $turma=turma;     //valor em caso de vazio
        }        
else
{
    $turma=$_REQUEST['turma'];  //valor am caso diferente de vazio
    }
$PHPJasperXML->arrayParameter=  ["ano"=>$ano,"codsiem"=>$codsiem,"simulado"=>$simulado,"nivel"=>$nivel,"turma"=>$turma];



$PHPJasperXML->load_xml_file("/opt/lampp/htdocs/simrede/jrxmlreport/simOnLineLogins.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file