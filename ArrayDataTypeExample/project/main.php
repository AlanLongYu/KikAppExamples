<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("");

$table = new Table();

function array_data_type(){

//supose that your json has this structure:
//[{"id":"120","name":"Pedro"},{"id":"121","name":"John"},{"id":"120","name":"Juan"}]
 
//your ArrayDataType should look like this:
$struct = array(
                    array(
                            "id" => type::Numeric(6),                                
                            "name" => type::Character(150),
                        )
                );
 

}

function another_array() {

//supose that your json has this structure:
//{"login":"1222"}
 
//your ArrayDataType should look like this:
$struct1 = array("login"=>type::Numeric(8));
 
}

?>