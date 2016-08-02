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

$input_message = new InputText();
$input_message -> setLabelCaption("Write the message");

$input_address= new InputText();
$input_address-> setLabelCaption("Write the e-mail address")

$button_email= new Button();
$button_email-> setCaption("Send e-mail!");
$button_email-> onTap(email());

$mainTable -> addControl($input_message,1,1);
$mainTable -> addControl($input_address,2,1);
$mainTable -> addControl($button_email,3,1);

$win -> addControl($mainTable);

function email() {
    Interop::SendEmail($input_address,$input_subject,$input_message);
}
?>