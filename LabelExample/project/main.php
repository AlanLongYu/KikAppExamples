<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("First Label");

$mainTable = new Table();

$label= new Label();
$label->setCaption("My first label!");

$mainTable -> addControl($label,1,1);
$win -> addControl($mainTable);


?>