<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("SwitchControl");

$mainTable = new Table();

$switch1 = new SwitchControl();
$switch1 -> setLabelCaption("Notifications");
$switch1 -> setLabelPosition("Left");

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($switch1,1,1,1,1,"Center","Middle");
$mainTable -> addControl($button,2,1);
$win -> addControl($mainTable);

function clickme(){
   echo $switch1->getValue();
}

?>
