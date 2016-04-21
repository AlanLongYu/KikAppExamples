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

$input_phone= new InputPhone();
$input_phone-> setLabelCaption("Write the number");

$input_address= new InputText();
$input_address-> setLabelCaption("Write the e-mail address")

$input_subject= new InputText();
$input_subject-> setLabelCaption("Write the subject");

$button_message= new Button();
$button_message-> setCaption("Message!");
$button_message-> onTap(message());

$button_call= new Button();
$button_call-> setCaption("Place call!");
$button_call-> onTap(call());

$button_email= new Button();
$button_email-> setCaption("Send e-mail!");
$button_email-> onTap(email());

$button_sms= new Button();
$button_sms-> setCaption("Send SMS!");
$button_sms-> onTap(sms());

$mainTable-> addControl($input_message,1,1);
$mainTable-> addControl($input_phone,2,1);
$mainTable-> addControl($input_address,3,1)
$mainTable-> addControl($input_subject,4,1);
$mainTable-> addControl($button_message,5,1);
$mainTable-> addControl($button_call,6,1);
$mainTable-> addControl($button_email,7,1);
$mainTable-> addControl($button_sms,8,1);

$win-> addControl($mainTable);

function message() {
	Interop::SendMessage($input_message,$input_phone);
}

function call() {
	Interop::PlaceCall($input_phone);
}

function email() {
	Interop::SendEmail($input_address,$input_subject,$input_message);
}

function sms() {
	Interop::SendSMS($input_phone,$input_message);
}

function confirm() {
	$isOk= new InputBoolean();
	$isOk=Interop::Confirm("Are you sure you want to delete it?");
	if($isOk == true){
		ProgressIndicator::ShowWithTitle("Deleting");
		$httpC = new httpClient();		
		$httpC -> addVariable("Id",$id);
		$httpC -> Execute('POST',"http://your_server.com/InteropExample/crud/deleteItem.php");
		ProgressIndicator::Hide();
		return;
	}
}

?>
