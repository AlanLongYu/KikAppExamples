<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Welcome");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();
$mainTable-> setClass("table.general");


$label= new Label();
$label-> setCaption("Welcome to the Global Example!");
$label-> setClass("label.Home");

$label2= new Label();
$label2-> setCaption("Use the Slide to open Facebook, Twitter and Map!");
$label2-> setClass("label.Home");

$image=new Image();
$image-> setImage("img/Android/hdpi/appicon.png");

$mainTable->addControl($label,2,1,1,1,"Center","Middle");
$mainTable->addControl($label2,3,1,1,1,"Center","Middle");
$mainTable-> addControl($image,4,1,1,1,"Center","Middle");

$win-> addControl($mainTable);

?>