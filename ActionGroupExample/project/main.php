<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win->setCaption("ActionBar");
 
$table = new Table();
 
$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");
 
$actionGroup = new ActionGroup();
$actionGroup->setCaption("");
$actionGroup->setImage("img/ico_thumb.png");
 
$buttonBar = new ButtonBar();
$buttonBar->setCaption("Button 1");
$buttonBar->setImage("img/ico_thumb.png");
$buttonBar->onTap(functonClick());
 
$buttonBar_2 = new ButtonBar();
$buttonBar_2->setCaption("Button 2");
$buttonBar_2->setImage("img/ico_thumb.png");
$buttonBar_2->onTap(functonClick_2());
 
$actionGroup->addControl($buttonBar);
$actionGroup->addControl($buttonBar_2);
$actionBar->addControl($actionGroup);
 
$win->addControl($actionBar);
$win->addControl($table);
 
function functonClick(){
 echo "On click button 1!";
}
 
function functonClick_2(){
 echo "On click button 2!";
}
 
?>
