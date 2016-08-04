<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Check Box!");

$mainTable = new Table();

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$check_box1= new CheckBox();
$check_box1-> setLabelCaption("Check Box 1");
$check_box1-> setLabelPosition("Top");
$check_box1-> setCheckValue("Check Box 1 checked!");
$check_box1-> setUnCheckValue("Check Box 1 unchecked!");


$mainTable-> addControl($check_box1,1,1);
$mainTable -> addControl($button,2,1);
$win -> addControl($mainTable);

function clickme(){
   echo $check_box1->getValue();
}

?>