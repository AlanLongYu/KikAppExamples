<?php 
/**
 * Example SDMap.
 * @author KikApp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("SDMap");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

//Create Inputs
$id 	= new InputNumeric();
$title	= new InputText();
$desc 	= new InputText();
$geo 	= new InputGeolocation();

//Create SDMap
$grid = new SDMap();
$grid -> setLocation($geo); //Data type Geolocation.
$grid -> setMapType("Hybrid");
$grid -> setShowMyLocation(true);
$grid -> setCanChooseType(true);

$grid -> setPinImage("img/pin.png");
$grid -> setPinImageMyLocation("img/my_pin.png");
$grid -> onTap(detail())

$table = new Table();
$table -> addControl($title,1,1);
$table -> addControl($desc,2,1);

$grid -> addControl($table);
$grid -> addData(load_places());

$mainTable -> addControl($grid,1,1);
$win -> addControl($mainTable);

function load_places(){	
	$url = "http://demo.kikapptools.com/SDMap/crud/getPlaces.php";
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
		
}

function start(){
	//$win -> setCaption("mmm..");
}

function detail(){
	$win -> Open("detail",$id,$title);
}

?>