<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("First Facebook Post!");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$input= new InputText();  						//create input
$input->setLabelCaption("Write your thoughts");

$button = new Button();
$button -> setCaption("Post on Facebook");
$button -> onTap(facebook());
$button-> setClass("button.blue");


$mainTable->addControl($input,1,1,1,1,"Center","Middle");
$mainTable->addControl($button,2,1,1,1,"Center","Middle");
$win -> addControl($mainTable);

function facebook(){
	Facebook::PostToWall("First post","Caption",$input,"http://www.kikapptools.com","");
}

?>