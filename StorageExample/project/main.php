<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();

$input= new InputText();
$input -> setLabelCaption("Write your name");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($input,1,1);
$mainTable -> addControl($button,2,1);
$win -> addControl($mainTable);

function clickme(){
   StorageAPI::Set("token",$input);
   $name = new InputText();
   $name   = StorageAPI::Get("token");
   echo "Your name is: ".$name;
}

?>