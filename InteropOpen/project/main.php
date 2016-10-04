<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();

$twitterUrl = new InputText();


$button = new Button();
$button -> setCaption("Open Twitter!");
$button -> onTap(openTW());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);



function openTW(){
   $twitterUrl = "https://twitter.com/kikapptools";
	Interop::Open($twitterUrl);
}

?>