<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Address Book");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$btn_contact_add = new Button();
$btn_contact_add -> setCaption("Add Contact");
$btn_contact_add -> onTap(addContact());

$btn_contact_viewAll = new Button();
$btn_contact_viewAll -> setCaption("View All Contact");
$btn_contact_viewAll -> onTap(viewAllContact());

$input_name= new InputText();
$input_name-> setLabelCaption("Name");

$input_lastname= new InputText();
$input_lastname-> setLabelCaption("Last Name");

$input_email= new InputEmail();
$input_email-> setLabelCaption("E-mail");

$input_phone= new InputPhone();
$input_phone-> setLabelCaption("Phone");

$input_work= new InputText();
$input_work-> setLabelCaption("Work");

$input_message= new InputText();
$input_message-> setLabelCaption("Message");


$mainTable -> addControl($input_name,1,1);
$mainTable -> addControl($input_lastname,2,1);
$mainTable -> addControl($input_email,3,1);
$mainTable -> addControl($input_phone,4,1);
$mainTable -> addControl($input_work,5,1);
$mainTable -> addControl($input_message,6,1);
$mainTable -> addControl($btn_contact_add,7,1);
$mainTable -> addControl($btn_contact_viewAll,8,1);

$win -> addControl($mainTable);

function addContact(){
	$isOk = new InputBoolean();
	//$isOk = AddressBook::AddContact("Matias","Preciozzi","mpreciozzi@devxtend.com","099686098","DevXtend","","Mensaje por las dudas...");
	$isOk= AddressBook::AddContact($input_name,$input_lastname,$input_email,$input_phone,$input_work,"",$input_message);
	
	if ($isOk == true){
		echo "Contact added!";
	}
	
}

function viewAllContact(){
	/*		
	$contacts = array(
				"DisplayName" => type::Character(80),
				"FirstName" => type::Character(40),
				"LastName" => type::Character(80),
				"EMail" => type::EMail(),
				"Phone" => type::Phone(),
				"CompanyName" => type::Character(80),
				"Photo" => type::Image(),
				"Note" => type::Character(80)												
		);
	*/
	
	$contacts = AddressBook::GetAllContacts();
		
}

/*
 * Only iOS..
function viewContact(){
	AddressBook::ViewContact("Matias","Preciozzi","mpreciozzi@devxtend.com","099686098");
}

function removeContact(){
	$isOk = new InputBoolean();
	$isOk = AddressBook::removeContact("Matias","Preciozzi","mpreciozzi@devxtend.com","099686098","");
	
	if ($isOk == true){
		echo "contacto eliminado";
	}
}
*/

?>