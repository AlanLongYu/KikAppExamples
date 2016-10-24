<?php 
/***
 * Popup
 */

$win = new SDPanel();
$win -> setCaption("");

$table = new Table();
$table -> setFormClass("form.algo");

$fecha = new Label();
$fecha -> setCaption("Date");

$combo_box_fecha= new ComboBox();
$combo_box_fecha-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_fecha-> setValues("Today:1,Next 7 days:2, Next 15 days:3");

$genero = new Label();
$genero -> setCaption("Genero");

$combo_box_genero= new ComboBox();
$combo_box_genero-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_genero-> setValues("Rock:1, Pop:2, Opera:3");

$lugar = new Label();
$lugar -> setCaption("Place");

$combo_box_lugar= new ComboBox();
$combo_box_lugar-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_lugar-> setValues("All:1, Staples Center:2, Quickens Loans Arena:3");

$boton = new Button();
$boton -> setCaption("Buscar");
$boton -> onTap(prueba());

$table -> addControl($fecha,1,1);
$table -> addControl($combo_box_fecha,1,2);
$table -> addControl($genero,2,1);
$table -> addControl($combo_box_genero,2,2);
$table -> addControl($lugar,3,1);
$table -> addControl($combo_box_lugar,3,2);
$table -> addControl($boton,4,1,1,2,"","");

$win -> addControl($table);

function prueba(){
   echo "Searching...";
}
?>