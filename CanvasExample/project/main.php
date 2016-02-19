<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("First Canvas!");

$canvas= new Canvas();
$canvas-> setWidth("100%");
$canvas-> setHeight("100%");

$mainTable= new Table();
$table= new Table();

$label= new Label();
$label-> setCaption("First image:");

$label2= new Label();
$label2-> setCaption("Second image:");


$image= new Image();
$image-> setImage("img/Android/hdpi/appicon.png");

$image2= new Image();
$image2-> setImage("img/Android/hdpi/lunchimage.png");


$table-> addControl($label,1,1);
$table-> addControl($label2,3,1);

$canvas-> addPosition($image2,"0%","100%","0","350dip","0%","100%",0);
$canvas-> addPosition($image,"0%","100%","0","66dip","0%","100%",1);
$canvas-> addPosition($table,"0%","100%","0","180dip","0%","100%",2);

$mainTable-> addControl($canvas,1,1);

$win-> addControl($mainTable);

?>