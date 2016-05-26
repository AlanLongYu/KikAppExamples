<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();
$mainTable-> setClass("table");

$table= new Table()
$table-> setClass("table.aux");

$input= new InputText();
$input-> setLabelCaption("Name:")
$input-> setInviteMessage("Write your name")
$input-> setClass("input");
$input->setLabelPosition("Left");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());
$button-> setClass("button.blue");

$table-> addControl($input,1,1);
$table -> addControl($button,2,1);

$mainTable-> addControl($table,1,1);

$win -> addControl($mainTable);

function clickme(){
	echo "Your name is: ".$input;
}

?>