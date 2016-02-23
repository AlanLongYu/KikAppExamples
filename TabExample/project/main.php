<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win= new SDPanel();
$win-> setCaption("Tabs!");


$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$tab= new Tab();
$tab-> setVisible(true);
$tab-> setClass("tab");

$item1= new TabItem();
$item1-> setCaption("Item 1");

$item2= new TabItem();
$item2-> setCaption("Item 2");

$tableItem1= new Table();
$tableItem2= new Table();

$input1= new InputText();
$input1-> setLabelCaption("Write your name");

$input2= new InputText();
$input2-> setLabelCaption("Write your age");

$button1= new Button();
$button1-> setCaption("Submit");
$button1-> onTap(submit());

$tableItem1->addControl($input1,2,1);
$tableItem1->addControl($input2,3,1);
$tableItem1->addControl($button1,4,1);


$item1-> addControl($tableItem1);
$item2-> addControl($tableItem2);

$tab-> addTab($item1);
$tab-> addTab($item2);

$mainTable-> addControl($tab);
$win-> addControl($actionBar);
$win-> addControl($mainTable);

function submit() {
 echo "Your name is ".$input1." and you are ".$input2." years old!";
}
?>