<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Dynamic Combo Box!");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$dc = new DynamicComboBox();
$dc -> setValues(load_data());
$dc-> setAddEmptyItem(false);


$mainTable -> addControl($button,1,1);
$mainTable -> addControl($dc,2,1);
$win -> addControl($mainTable);

function clickme(){
	echo "Hello !";
}

function load_data(){
	$url = "http://www.devxtend.com/Gecko/samples/3_2/rest/main_load_data";
	$hc = new httpClient();
	$rs = $hc -> Execute("GET",$url);

	$struct = array(
			array(
					"id" => DataType::Character(6),
					"name" => DataType::Character(100)
			)
	);

	Data::FromJson($struct,$rs);
}


?>