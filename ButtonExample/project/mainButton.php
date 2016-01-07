<?php


/**
 * Button control example.
 * mainButton.php
 */
 
$win = new SDPanel();
$win->setCaption("Button control");
 
$tabMain = new Table();
 
$button = new Button();
$button->setCaption("Save");
$button->onTap(save());
 
$tabMain->addControl($button,1,1);
$win->addControl($tabMain);
 
function save(){
	echo "Hello world!";
}
 
?>