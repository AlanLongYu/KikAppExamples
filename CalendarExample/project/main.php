<?php 
/**
 * Main object.
 * @author Gecko
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Calendar!");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$imag = new Image();
$imag-> setImage("img/ico_thumb.png");


$button = new Button();
$button -> setCaption("Calendar!");
$button -> onTap(clickme());

$date_ini= new InputDate();
$date_ini-> setLabelCaption("Starts on")
$date_ini-> setLabelPosition("Top");

$date_end= new InputDate();
$date_end-> setLabelCaption("Finishes on")
$date_end-> setLabelPosition("Top");


$input_title= new InputText();
$input_title-> setLabelCaption("Title")

$input_place= new InputText();
$input_place-> setLabelCaption("Place")


$mainTable-> addControl($input_title,1,1);
$mainTable-> addControl($input_place,2,1);
$mainTable-> addControl($date_ini,3,1);
$mainTable-> addControl($date_end,4,1);
$mainTable -> addControl($button,5,1);

$win -> addControl($mainTable);

function clickme(){
	
	Calendar::Schedule(
		$input_title,
		$date_ini,
		$date_end,
		"10:00:01",
		"11:05:00",
		$input_place);	

}

?>
