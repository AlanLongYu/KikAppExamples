<?php

/**
* Rest client services.
* @author KikApp PHP Generator
* @version Beta 2 build 0.2.47
*/

require 'RestClient/HttpClient.class.php';

header('Content-Type: application/json;');

$url= "http://demo.kikapptools.com/FuncionRefresh/crud/getCity.php";

$data = array();
$merge = array("nombreCiudad"=>"city");

$searchValue = isset($_GET['Searchtext'])?$_GET['Searchtext']:"";
$start = isset($_GET['start'])?$_GET['start']:"";
$count = isset($_GET['count'])?$_GET['count']:"";

$client = HttpClient::getInstance();
$response = $client->getURL("GET", $url, $data);

if ($response == null)
	$response = '{}';

$response = json_decode($response, true);
$client->paginate($start, $count, $response);

$result = array();
$client->renameJsonKeys($response, $parent=null, $merge, $result);

echo json_encode($result,JSON_UNESCAPED_UNICODE);

?>
