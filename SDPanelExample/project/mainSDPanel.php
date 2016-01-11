<?php


/**
 * SDPanel example.
 * mainSDPanel.php
 */
 
//Create SDPanel
$win = new SDPanel();
$win->setCaption("Hello world!");
$win->showAds(true);
$win->adsPosition("Bottom"); 
 
//Create table control
$mainTable = new Table();
 
//Add table to SDPanel 
$win->addControl($mainTable); 
 
?>