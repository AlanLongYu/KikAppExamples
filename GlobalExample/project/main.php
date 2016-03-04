<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Global Example!");

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$mainTable = new Table();

$table_home = new Table();
$table_home -> setClass("table.MenuOption");
$table_home -> setColumnsStyle("20%;80%");

$img_home= new Image();
$img_home-> setImage("img/Android/hdpi/ic_home.png");
$img_home-> setClass("image.menu");

$lbl_home = new Label();
$lbl_home -> setClass("label.MenuOption");
$lbl_home -> setCaption("Home");

$table_home -> onTap(home());
$table_home -> addControl($img_home,1,1,1,1,"Center","Middle");
$table_home -> addControl($lbl_home,1,2,1,1,"Left","Middle");

$table_facebook = new Table();
$table_facebook -> setClass("tableMenuOption");
$table_facebook -> setColumnsStyle("20%;80%");

$img_facebook = new Image();
$img_facebook -> setImage("img/Android/hdpi/ic_facebook.png");
$img_facebook -> setClass("image.menu");

$lbl_facebook = new Label();
$lbl_facebook -> setClass("label.MenuOption");
$lbl_facebook -> setCaption("Facebook");

$table_facebook -> onTap(facebook());
$table_facebook -> addControl($img_facebook,1,1,1,1,"Center","Middle");
$table_facebook -> addControl($lbl_facebook,1,2,1,1,"Left","Middle");

$table_twitter= new Table();
$table_twitter-> setClass("table.MenuOption");
$table_twitter-> setColumnsStyle("20%;80%");

$img_twitter = new Image();
$img_twitter -> setImage("img/Android/hdpi/ic_twitter.png");
$img_twitter -> setClass("image.menu");

$lbl_twitter = new Label();
$lbl_twitter -> setClass("label.MenuOption");
$lbl_twitter -> setCaption("Twitter");

$table_twitter-> onTap(twitte());
$table_twitter-> addControl($img_twitter,1,1,1,1,"Center","Middle");
$table_twitter-> addControl($lbl_twitter,1,2,1,1,"Left","Middle");


$table_map = new Table();
$table_map -> setClass("table.MenuOption");
$table_map -> setColumnsStyle("20%;80%");

$img_map = new Image();
$img_map -> setImage("img/Android/hdpi/ic_map.png");
$img_map -> setClass("image.menu");

$lbl_map = new Label();
$lbl_map -> setClass("label.MenuOption");
$lbl_map -> setCaption("Map");

$table_map -> onTap(map());
$table_map -> addControl($img_map,1,1,1,1,"Center","Middle");
$table_map -> addControl($lbl_map,1,2,1,1,"Left","Middle");

$mainTable-> addControl($table_home,2,1);
$mainTable-> addControl($table_facebook,3,1);
$mainTable-> addControl($table_twitter,4,1);
$mainTable-> addControl($table_map,5,1);


$win -> addControl($mainTable);


function Slide() {
	$token = new InputText(80);
	$win-> Open("Home");	
}

function home() {
	$win-> Open("Home");
}

function facebook() {
	$win-> Open("FB");
}

function twitte() {
	$win-> Open("TW");

}

function map() {
	$win-> Open("Map");

}

?>