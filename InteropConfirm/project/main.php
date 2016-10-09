<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Hello world!");

$mainTable = new Table();

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(back());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function back(){
   $ok = new InputBoolean();
   $ok = Interop::Confirm('Are you sure you want to close?');
   if($ok == true){
      return;
   }
}

?>
