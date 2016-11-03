<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("PlayVideo");

$mainTable = new Table();

$video_url = new InputText();

$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function clickme(){
   $video_url = "https://www.kikapptools.com/wp-content/uploads/2016/02/Kikapp-Hd-video.mp4";
   Interop::PlayVideo($video_url);
}

?>