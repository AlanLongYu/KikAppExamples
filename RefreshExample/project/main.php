<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();

$city = new InputText();
$city -> setReadOnly(true);

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function refresh(){
	$url = "http://demo.kikapptools.com/FuncionRefresh/crud/getCity.php";	

	$httpClient = new httpClient();

	$result = $httpClient -> Execute('GET',$url); 

	$struct = array(
					"nombreCiudad" => DataType::Character(150)
	);

	Data::FromJson($struct,$result); 

	$city 	= $struct['nombreCiudad'];

}

function clickme(){
	echo "The city is: ".$city;
}

?>