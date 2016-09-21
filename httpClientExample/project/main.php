<?php 


$win = new SDPanel();
$win -> setCaption("httpClient Example");

$table = new Table();

$city = new InputText();
$city -> setReadOnly(true);

$button = new Button();
$button -> setCaption("Load City");
$button -> onTap(loadCity());

$table -> addControl($city,1,1);
$table -> addControl($button,2,1);

$win -> addControl($table);


function loadCity(){
	$url = "http://demo.kikapptools.com/HttpClientEjemplo/crud/getCity.php";	

	$httpClient = new httpClient();

	$result = $httpClient -> Execute('GET',$url); 

	$struct = array(
					"nombreCiudad" => DataType::Character(150)
	);

	Data::FromJson($struct,$result); 
	$city 	= $product['nombreCiudad'];
}
?>