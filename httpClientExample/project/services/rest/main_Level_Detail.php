<?php
/**
* Rest client services.
* @author KikApp PHP Generator
* @version Beta 1 build 0.1.39 
*/

header('Content-Type: application/json;');

$empty = array();

$city=""; 

$varDefault = array(
		ucfirst("city")=>$city, 
							
	);

$result = array_merge(
            $empty, $varDefault
        );	

echo json_encode($result);
?>
