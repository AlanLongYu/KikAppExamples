<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();
$mainTable-> setRowsStyle("300dip");

$video = new InputVideo();
$video -> setReadOnly(true);

$mainTable -> addControl($video,1,1);
$win -> addControl($mainTable);

function clientStart(){
	$video -> setValue("https://www.youtube.com/watch?v=anywfG-X2b8");
}

?>