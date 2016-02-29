<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Combo Box!");

$mainTable = new Table();

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$combo_box= new ComboBox();
$combo_box-> setEmptyItem("true");
$combo_box-> setEmptyItemText("Choose options");
$combo_box-> setValues("Option 1:1, Option 2:2, Option 3:3");


$mainTable-> addControl($combo_box,1,1);
$mainTable-> addControl($button,5,1);
$win-> addControl($mainTable);

function clickme(){
	echo "You have selected option number ".$combo_box->getValue();
}

?>