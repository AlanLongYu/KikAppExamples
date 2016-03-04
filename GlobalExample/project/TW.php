<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Twitter API!");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();
//$mainTable-> setClass("table.general");

$input= new InputText();
$input-> setLabelCaption("Write what you want to tweet!");


$button = new Button();
$button -> setCaption("Tweet!");
$button -> onTap(twitter());
$button-> setClass("button.blue");

$mainTable->addControl($input,1,1,1,1,"Center","Middle");
$mainTable->addControl($button,2,1,1,1,"Center","Middle");
$win-> addControl($mainTable);

function twitter(){
	Twitter::Tweet($input);
}

?>