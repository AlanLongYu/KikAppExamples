<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Interop");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$input_message= new InputText();
$input_message-> setLabelCaption("Write the message");

$button_message= new Button();
$button_message-> setCaption("Message!");
$button_message-> onTap(message());

$mainTable-> addControl($input_message,1,1);
$mainTable-> addControl($button_message,2,1);

$win-> addControl($mainTable);

function message() {
   Interop::SendMessage($input_message,$input_phone);
}

?>