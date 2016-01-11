<?php

/**
 * Button control example.
 * mainButton.php
 */
 
$win = new SDPanel();
$win->setCaption("Button control");
 
$tabMain = new Table();
 
$button = new Button();
$button->setCaption("Button");
$button->setClass("button.Example");
$button->onTap(action());
 
$tabMain->addControl($button,1,1);
$win->addControl($tabMain);
 
function action(){
	echo "Hello world!";
}
 
?>