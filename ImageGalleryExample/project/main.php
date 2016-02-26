<?php 
/**
 * Example Image Gallery
 * @author KikApp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("Image Gallery");

$mainTable = new Table();

//Create Inputs
$id = new InputNumeric();
$title = new InputText();
$desc = new InputText();
$image = new InputImage();

//Create Image Gallery
$grid = new ImageGallery();
$grid -> setImage($image);
$grid -> setTitle($title);
$grid -> setSubtitle($desc);
$grid -> setEnableShare(true);

$grid -> addData(load_images());

$mainTable -> addControl($grid,1,1);
$win -> addControl($mainTable);

function load_images(){	
	$url = "http://demo.kikapptools.com/magento/apiGecko/productos.php?cId=0";
	$httpClient = new httpClient();
	
	$result = $httpClient -> Execute('GET',$url);
	
	$struct = array(
			array(
					"id" => DataType::Numeric(6),
					"name" => DataType::Character(150),
					"description" => DataType::Character(300),
					"pirce" => DataType::Character(10),
					"thumb"=>DataType::Character(200)
			)
	);
	
	Data::FromJson($struct,$result);
			
	foreach ($struct as $product){
		$id 	= $product['id'];
		$title 	= $product['name'];
		$desc 	= $product['description'];
		$image 	= $product['thumb'];
	}
		
}

?>