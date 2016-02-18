<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("ButtonBar!");


$input= new InputText();
$input->setLabelCaption("Write your name")

$actionBar= new ActionBar();

$btn_save= new ButtonBar();
$btn_save-> setCaption("Save");
$btn_save->onTap(save());


$btn_delete= new ButtonBar();
$btn_delete-> setCaption("Delete");
$btn_delete->onTap(delete());


$actionBar->addControl($btn_save);
$actionBar->addControl($btn_delete);
$win->addControl($actionBar);

$mainTable = new Table();
$mainTable -> setHeaderRowApplicationBarsClass("applicationBars.transparent");

$mainTable->addControl($input,1,1)


$win -> addControl($mainTable);

function save(){
	echo "Your name is ".$input."!";
}
function delete() {
	return ;
}

?>