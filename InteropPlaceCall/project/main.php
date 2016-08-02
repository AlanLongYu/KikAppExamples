<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Interop");

$actionBar = new ActionBar();
$actionBar ->setClass("applicationBars");

$mainTable = new Table();

$input_phone = new InputPhone();
$input_phone -> setLabelCaption("Write the phone number");

$button_call= new Button();
$button_call-> setCaption("Call!");
$button_call-> onTap(call());

$mainTable -> addControl($input_phone,1,1);
$mainTable -> addControl($button_call,2,1);

$win -> addControl($mainTable);

function call() {
    Interop::PlaceCall($input_phone);
}

?>