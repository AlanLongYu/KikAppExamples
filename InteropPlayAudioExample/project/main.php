<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("PlayAudio");

$mainTable = new Table();

$audio_url = new InputText();

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function clickme(){
   $audio_url = "https://goo.gl/v8IQZB";
   Interop::PlayVideo($audio_url);
}

?>