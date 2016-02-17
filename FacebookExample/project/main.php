<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("First Facebook Post!");

$mainTable = new Table();

$input= new InputText();  						//create input
$input->setLabelCaption("");

$button = new Button();
$button -> setCaption("Post on Facebook");
$button -> onTap(facebook());

$mainTable -> addControl($input,1,1);
$mainTable -> addControl($button,2,1);
$win -> addControl($mainTable);

function facebook(){
	Facebook::PostToWall("First post","Caption",$input,"http://www.kikapptools.com","");
}

?>