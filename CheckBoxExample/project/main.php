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


$check_box2= new CheckBox();
$check_box2-> setLabelCaption("Check Box 2");
$check_box2-> setLabelPosition("Top");
$check_box2-> setCheckValue("Check Box 2 checked!");
$check_box2-> setUnCheckValue("Check Box 2 unchecked!");


$check_box3= new CheckBox();
$check_box3-> setLabelCaption("Check Box 3");
$check_box3-> setLabelPosition("Top");
$check_box3-> setCheckValue("Check Box 3 checked!");
$check_box3-> setUnCheckValue("Check Box 3 unchecked!");


$mainTable-> addControl($check_box1,1,1);
$mainTable-> addControl($check_box2,2,1);
$mainTable-> addControl($check_box3,3,1);
$mainTable -> addControl($button,4,1);
$win -> addControl($mainTable);

function clickme(){
	echo "".$check_box1->getValue();
	echo "".$check_box2->getValue();
	echo "".$check_box3->getValue();
}

?>