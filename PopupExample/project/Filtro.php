<?php 
/***
 * Popup
 */

$win = new SDPanel();
$win -> setCaption("");

$table = new Table();
$table -> setFormClass("form.algo");

$fecha = new Label();
$fecha -> setCaption("Fecha");

$combo_box_fecha= new ComboBox();
$combo_box_fecha-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_fecha-> setValues("Hoy:1, Proximos 7 dias:2, Proximos 15 dias:3");

$genero = new Label();
$genero -> setCaption("Genero");

$combo_box_genero= new ComboBox();
$combo_box_genero-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_genero-> setValues("Rock:1, Cumbia:2, Pop:3");

$lugar = new Label();
$lugar -> setCaption("Lugar");

$combo_box_lugar= new ComboBox();
$combo_box_lugar-> setEmptyItem(false);
//$combo_box_fecha-> setEmptyItemText("Choose options");
$combo_box_lugar-> setValues("Todos:1, Estadio Centenario:2, Velodromo:3");

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
   echo "Buscando...";
}
?>