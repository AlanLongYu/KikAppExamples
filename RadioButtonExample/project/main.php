<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Radio Button!");

$mainTable = new Table();
$mainTable-> setRowsStyle("200dip;pd;pd;pd;66dip");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$radio_button= new RadioButton();
$radio_button-> setValues("Uruguay:1,US:2,Canada:3");
$radio_button-> setAddEmptyItem(false);
$radio_button-> setTitle("Where are you from?");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable-> addControl($radio_button,1,1);
$mainTable -> addControl($button,5,1);
$win -> addControl($mainTable);

function clickme(){

	if($radio_button->getValue()=="1") {
		echo "You are from Uruguay!";
	}
	if ($radio_button->getValue()=="2") {
		echo "You are from US!";
	}
	if ($radio_button->getValue()=="3") {
		echo "You are from Canada!";
	}

}

?>