<?php 
/***
 * Popup
 */

$win = new SDPanel();
$win -> setCaption("");

$table = new Table();
$table -> setFormClass("form.algo");

$lugar = new Label();
$lugar -> setCaption("Place");

$combo_box_lugar= new ComboBox();
$combo_box_lugar-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_lugar-> setValues("All:1, Staples Center:2, Quickens Loans Arena:3");

$boton = new Button();
$boton -> setCaption("Search");
$boton -> onTap(prueba());

$table -> addControl($lugar,1,1);
$table -> addControl($combo_box_lugar,1,2);
$table -> addControl($boton,2,1,1,2,"","");

$win -> addControl($table);

function prueba(){
   echo "Searching...";
}
?>