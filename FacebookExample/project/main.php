<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("First Facebook Post!");

$mainTable = new Table();

$image= new InputImage();	

$input= new InputText();  						//create input
$input->setLabelCaption("");

$button = new Button();
$button -> setCaption("Post on Facebook 2!");
$button -> onTap(facebook());

$mainTable -> addControl($input,1,1);
$mainTable -> addControl($image,2,1);
$mainTable -> addControl($button,3,1);
$win -> addControl($mainTable);

function facebook(){
	Facebook::PostToWall("First post","Caption","Long message.","http://www.kikapptools.com","");
}

?>