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

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function clickme(){
   $image=Camera::TakePhoto();
}

?>
