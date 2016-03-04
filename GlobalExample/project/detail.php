<?php 
/**
 * Example SDMap.
 * @author KikApp
 * @version 1.0
 */

$win = new SDPanel();

//Create Inputs
$id 	= new InputNumeric();
$title	= new InputText();
$desc 	= new InputText();

Data::getParm($id,$title); //get parms.

$mainTable = new Table();

$table = new Table();
$table -> addControl($title,1,1);
$table -> addControl($desc,2,1);

$mainTable -> addControl($table,1,1);
$win -> addControl($mainTable);

function start(){
	/*
	$url = "http://demo.kikapptools.com/SDMap/crud/getPlaces.php?id=".$id;
	$httpClient = new httpClient();
	
	$result = $httpClient -> Execute('GET',$url);
	
	$struct = array(
			array(
					"Id" => DataType::Numeric(6),
					"Title" => DataType::Character(150),
					"Description" => DataType::Character(300),
					"Geolocation" => DataType::Geolocation()
			)
	);
	
	Data::FromJson($struct,$result);
		
	foreach ($struct as $place){
		$id 	= $place['Id'];
		$title 	= $place['Title'];
		$desc 	= $place['Description'];
		$geo 	= $place['Geolocation'];
	}
	*/
	
	$win -> setCaption($title);
}

?>