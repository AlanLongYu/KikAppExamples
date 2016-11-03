<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("CameraAPI");

$mainTable = new Table();

$image = new InputImage();

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

//$mainTable -> addControl($switch1,1,1,1,1,"Center","Middle");
$mainTable -> addControl($button,2,1);
$win -> addControl($mainTable);

function clickme(){
   $image=Camera::TakePhoto();
}

?>