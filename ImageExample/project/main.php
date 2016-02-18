<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Image control");
 
$tabMain = new Table();
 
$img_arrow = new Image();
$img_arrow -> setImage("img/Android/hdpi/appicon.png");
 
$tabMain -> addControl($img_arrow,1,1);
$win -> addControl($tabMain);
 

?>