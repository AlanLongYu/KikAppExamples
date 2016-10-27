<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Login");

$table = new Table();

$table_form = new Table();

$email 	= new InputEmail();
$email -> setInviteMessage("E-Mail");

$pass 	= new InputText();
$pass -> setIsPassword(true);		//it hides characters

$btn_save = new Button();
$btn_save -> setCaption("LOG IN");
$btn_save -> onTap(login());


$table_form -> addControl($email,1,1);
$table_form -> addControl($pass,2,1);

$table -> addControl($table_form,2,1);

$table_button = new Table();
$table_button -> addControl($btn_save,1,1);

$table -> addControl($table_button,3,1);
$win -> addControl($table);


function login(){
	
	if($email == null){
		echo "E-Mail is a required field.";
		//you can't leave it blank
	}else{
			ProgressIndicator::ShowWithTitle("Loading...");
			ProgressIndicator::Hide();
			//Closes the ProgressIndicator when everything is done
			AndroidAction::GoHome();	
	}		
}



?>
