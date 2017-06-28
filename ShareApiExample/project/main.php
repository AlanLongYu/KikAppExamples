<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */
 
$win = new SDPanel();
$win -> setCaption("Share API example");
 
$mainTable = new Table();
 
$input= new InputText();
$input -> setLabelCaption("Write your text to share");

$button_share_text = new Button();
$button_share_text -> setCaption("Share this text");
$button_share_text -> onTap(shareText());

$img = new InputImage();
$img->setReadOnly(true);
 
$button_share_image = new Button();
$button_share_image -> setCaption("Share this image");
$button_share_image -> onTap(shareImage());
 
$mainTable -> addControl($input,1,1);
$mainTable -> addControl($button_share_text,2,1);

$mainTable -> addControl($img,3,1);
$mainTable -> addControl($button_share_image,4,1);

$win -> addControl($mainTable);


function shareImage(){
	Share::ShareImage($img,'Body text','https://www.kikapptools.com/about/','Title text');	
}

function shareText(){
	Share::ShareText($input,'https://www.kikapptools.com/about/','Title text');	
}

function ClientStart(){
	$img->setValue("https://www.kikapptools.com/wp-content/uploads/2016/04/bannerHome_1500x500-e1460834756930.png");
} 
 
?>