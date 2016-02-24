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
        $id_prod    = $product['id'];
        $title_prod     = $product['name'];
        $desc_prod  = $product['description'];
        $image_prod     = $product['thumb'];
        $price_prod     = $product['pirce'];
    }
     
    $id_prod = new InputNumeric();
}

?>