<?php
/**
* Rest client services.
* @author KikApp PHP Generator
* @version 1.0 
*/

$get = array_change_key_case($_GET, CASE_LOWER);
$result[0]['Gxdynprop'] = array(array("Form","Caption",$get["title"]));
echo json_encode($result);

?>
