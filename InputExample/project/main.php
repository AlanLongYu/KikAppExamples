<?php

/**
 * Input control example.
 * mainInput.php
 */
 
$win = new SDPanel();
$win->setCaption("Input control");
 
$tabMain = new Table();

//Input text
$input = new InputText();
$input->setClass("input.Example");
//$input->setValue("input text");

//Button for action 
$button = new Button();
$button->setCaption("Button");
$button->setClass("button.Example");
$button->onTap(action());
  
$tabMain->addControl($input,1,1);
$tabMain->addControl($button,2,1);
$win->addControl($tabMain);
 
function action(){
	echo "Value: ".$input;
	//echo "Value: ".$input->getValue();
}
 
?>