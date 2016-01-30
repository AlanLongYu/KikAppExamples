<?php

/**
 * Action Bar control example.
 * mainActionBar.php
 */
 
$win = new SDPanel();
$win->setCaption("Hello world!");
 
$tabMain = new Table();
 
$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");
$win->addControl($actionBar);
 
$win->addControl($tabMain);
 
?>