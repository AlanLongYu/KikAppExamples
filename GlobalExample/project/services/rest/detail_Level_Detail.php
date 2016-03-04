<?php
/**
* Rest client services.
* @author KikApp PHP Generator
* @version 1.0 
*/
$empty = array();

$get = array_change_key_case($_GET, CASE_LOWER);
$dynProp['Gxdynprop'] = array(array("Form","Caption",$get["title"]));

$varDefault = array(
		"title"=>$title, 
		"desc"=>$desc, 
		"input"=>$input, 
		"title"=>$title, 
		"desc"=>$desc, 
		"input"=>$input, 
							
	);

$result = array_merge(
            $empty, $varDefault
        );	

$result = array_merge(
	$dynProp, $result
);

echo json_encode($result);
?>
