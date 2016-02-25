<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Horizontal Grid!");

$mainTable = new Table();

$actionBar = new ActionBar();
$actionBar->setClass("applicationBars");

$grid_home = new HorizontalGrid();
$grid_home -> setRowsPerPagePortrait(1);
$grid_home -> setShowPageController(false);

$table_grid = new Canvas();

$grid_home -> addData(grid_load());

//inputs and controls
$title 	= new InputText(150);
$title -> setClass("inputtextTitlewhite");
$title -> setAutoGrow(true);
$image 	= new InputImage();
$image -> setClass("imageImageList");
$desc 	= new InputText(300);
$desc -> setClass("inputtextwhite");
$price 	= new InputText(10);
$price -> setClass("inputtextPrice");

$table_desc = new Table();
$table_desc -> setRowsStyle("25dip;35dip;25dip");
$table_desc -> setClass("tableProductThumb");
$table_desc -> addControl($title,1,1);
$table_desc -> addControl($desc,2,1);
$table_desc -> addControl($price,3,1);

$table_grid -> addPosition($image,"0%","100%","0","230dip","0%","100%");
$table_grid -> addPosition($table_desc,"0%","100%","140dip","83dip","0","0");

$grid_home -> addControl($table_grid);

$mainTable -> setRowsStyle("230dip;100%");
$mainTable-> addControl($grid_home,1,1);

$win-> addControl($mainTable);


function grid_load(){
	$url = "http://www.demo.kikapptools.com/magento/apiGecko/productos.php?display=home";
	$httpClient = new httpClient();
	
	$result = $httpClient -> Execute('GET',$url);
	
	$struct = array(
					array(
							"id" => DataType::Numeric(6),								
							"name" => DataType::Character(150),
							"description" => DataType::Character(300),							
							"pirce" => DataType::Character(10),
							"thumb"=> DataType::Character(200)
						)
				);
	
	Data::FromJson($struct,$result);
	
	foreach ($struct as $product){		
		$id 	= $product['id'];
		$title 	= $product['name'];
		$desc 	= $product['description'];
		$image 	= $product['thumb'];
		$price 	= $product['pirce'];
	}
	
	$id = new InputNumeric();
}

?>