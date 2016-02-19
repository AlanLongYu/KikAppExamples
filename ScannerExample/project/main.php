<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Scanner API");

$mainTable = new Table();

$button = new Button();
$button -> setCaption("Scan!");
$button -> onTap(scanner());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function scanner(){
	$code = new InputText();
	$code = ScannerAPI::ScanBarcode();
	echo "code ". $code;
}

?>