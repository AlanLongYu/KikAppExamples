<?php

/**
* Rest client services.
* @author Gecko PHP Generator
* @version 1.0 
*/

require 'RestClient/HttpClient.class.php';

$url= "http://www.demo.kikapptools.com/magento/apiGecko/productos.php?cId=0";

$data = array();
$merge = array("id"=>"id_prod","name"=>"title_prod","description"=>"desc_prod","thumb"=>"image_prod","pirce"=>"price_prod");

$searchValue = isset($_GET['Searchtext'])?$_GET['Searchtext']:"";
$start = isset($_GET['start'])?$_GET['start']:"";
$count = isset($_GET['count'])?$_GET['count']:"";

$cliente = HttpClient::getInstance();
$response = $cliente->getURL("GET", $url, $data);

if ($response == '{}' || $response == null || $response == '[]')
	$response = '{"empty":""}';

$cliente->jsonDecode($response);
$cliente->paginate($start, $count, $response);

$result = array();
$cliente->renameJsonKeys($response, $padre=null, $merge, $result);

/*
*/

$cliente->jsonEncode($result);
echo $result;
?>
