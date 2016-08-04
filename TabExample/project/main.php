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
//$tab-> setClass("tab");

$item1 = new TabItem();
$item1 -> setCaption("Tab 1");

$item2 = new TabItem();
$item2 -> setCaption("Tab2 2");

$tableItem1 = new Table();
$tableItem2 = new Table();

$label1 = new Label();
$label1 -> setCaption("Label Tab 1");

$label2 = new Label();
$label2 -> setCaption("Label Tab 2");

$tableItem1 -> addControl($label1,1,1);

$tableItem2 -> addControl($label2,1,1);

$item1 -> addControl($tableItem1);
$item2 -> addControl($tableItem2);

$tab -> addTab($item1);
$tab -> addTab($item2);

$mainTable -> addControl($tab);
$win -> addControl($actionBar);
$win -> addControl($mainTable);
?>