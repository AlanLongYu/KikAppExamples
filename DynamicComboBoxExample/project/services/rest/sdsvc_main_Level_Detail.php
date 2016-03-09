<?php

/**
* Rest client services.
* @author KikApp PHP Generator
* @version 1.0 
*/

require 'RestClient/HttpClient.class.php';

$url= "http://www.devxtend.com/Gecko/samples/3_2/rest/main_load_data";
$data = array();

$cliente = HttpClient::getInstance();
$response = $cliente->getURL("GET", $url, $data);

$result = json_decode($response);

echo createSvc($result,'id','name');
?>
