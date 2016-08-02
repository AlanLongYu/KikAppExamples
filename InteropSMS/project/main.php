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

$input_phone= new InputPhone();
$input_phone-> setLabelCaption("Write the phone number");

$button_sms= new Button();
$button_sms-> setCaption("Send SMS!");
$button_sms-> onTap(sms());

$mainTable -> addControl($input_message,1,1);
$mainTable -> addControl($input_phone,2,1);
$mainTable -> addControl($button_sms,3,1);

$win -> addControl($mainTable);

function sms() {
    Interop::SendSMS($input_phone,$input_message);
}
?>