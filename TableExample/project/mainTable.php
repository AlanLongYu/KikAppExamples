<?php


/**
 * Table example.
 * mainTable.php
 */
 
//Create SDPanel
$win = new SDPanel();
$win->setCaption("Hello world!");
 
//Labels to add to the table
$label_one = new Label();
$label_one->setCaption("Text 1");
$label_one->setClass("label.Example");

$label_two = new Label();
$label_two->setCaption("Text 2");
$label_two->setClass("label.Example");

//Inner table 
$table = new Table();
$table->setClass("table.Example");
$table->addControl($label_one,1,1,1,1,"Center","Middle");
$table->addControl($label_two,2,1,1,1,"Center","Middle");

$win->addControl($table);
 
?>