<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("");

$table = new Table();
$table -> setClass("tableGray");

$grid = new Grid();
$table_grid_product = new Table();
$table_grid_product -> setClass("tableGrid");
$table_grid_product -> setRowsStyle("80dip");
$table_grid_product -> setColumnsStyle("35%;65%;15dip");
$table_grid_product -> setHeight("85dip");

$grid -> addData(grid_load_products());
//the main use of the grid is to load data from a server
$grid -> onTap(action_prod());
//what happens when you tap on it

//inputs and controls
$title_prod 	= new InputText(150);
$title_prod -> setClass("attributetitleList");
$title_prod -> setAutoGrow(true);
$image_prod 	= new InputImage();
$image_prod -> setClass("imageImageList2");
$desc_prod 	= new InputText(300);
$desc_prod -> setClass("attributeTextGray");
$price_prod 	= new InputText(10);
$price_prod -> setClass("attributeTextPrice");

$table_desc_prod = new Table();
$table_desc_prod -> setRowsStyle("25dip;35dip;25dip");
$table_desc_prod -> setClass("tableProduct");
$table_desc_prod -> addControl($title_prod,1,1);
$table_desc_prod -> addControl($desc_prod,2,1);
$table_desc_prod -> addControl($price_prod,3,1);

$table_grid_product -> addControl($image_prod,1,1);
$table_grid_product -> addControl($table_desc_prod,1,2);

$grid -> addControl($table_grid_product);

$table -> setRowsStyle("100%");
$table -> addControl($grid,1,1);

$win -> addControl($table);



function action_prod(){
	$win -> Open("product_detail",$id_prod,$title_prod,$desc_prod,$price_prod);
}

function grid_load_products(){
	$url_prod = "http://www.demo.kikapptools.com/magento/apiGecko/productos.php?cId=0";	
	//the server url
	//Remember to configurate your server url on the Manifest.xml on <services>
	$httpClient_prod = new httpClient();

	$result_prod = $httpClient_prod -> Execute('GET',$url_prod); 
	//you get a JSON

	//it's a list so you have an array of an array
	$struct_prod = array(
			array(
					"id" => DataType::Numeric(6),
					"name" => DataType::Character(150),
					"description" => DataType::Character(300),
					"pirce" => DataType::Character(10),
					"thumb"=> DataType::Character(200)
			)
	);

	Data::FromJson($struct_prod,$result_prod); 
	//does a merge of the structure you made and the json you got

	foreach ($struct_prod as $product){
		$id_prod 	= $product['id'];
		$title_prod 	= $product['name'];
		$desc_prod 	= $product['description'];
		$image_prod 	= $product['thumb'];
		$price_prod 	= $product['pirce'];
	}
	
	$id_prod = new InputNumeric();
}

?>