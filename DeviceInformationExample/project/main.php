<?php 
/**
 * Main object.
 * @author Kikapp
 * @version 1.0
 */

$win = new SDPanel();
$win -> setCaption("DeviceInformation");

$mainTable = new Table();



$Id = new InputText();
$OSName = new InputText();
$OSVersion = new InputText();
$NetworkID = new InputText();
$Language = new InputText();
$DeviceType = new InputText();
$PlatformName = new InputText();
$AppVersionCode = new InputText();
$AppVersionName = new InputText();



$button = new Button();
$button -> setCaption("Click me!");
$button -> onTap(clickme());

$mainTable -> addControl($button,1,1);
$win -> addControl($mainTable);

function clickme(){
   $Id = DeviceInformation::Id;
   $OSName = DeviceInformation::OSName;
   $OSVersion = DeviceInformation::OSVersion;
   $NetworkID = DeviceInformation::NetworkID;
   $Language = DeviceInformation::Language;
   $DeviceType = DeviceInformation::DeviceType;
   $PlatformName = DeviceInformation::PlatformName;
   $AppVersionCode = DeviceInformation::AppVersionCode;
   $AppVersionName = DeviceInformation::AppVersionName;

   echo "Id: ".$ID;
   echo "OS name: ".$OSName;
   echo "OS version: ".$OSVersion;
   echo "Network id: ".$NetworkID;
   echo "Language: ".$Language;
   echo "Device Type: ".$DeviceType;
   echo "Platform Name: ".$PlatformName;
   echo "App version code: ".$AppVersionCode;
   echo "App version name: ".$AppVersionName;

}

?>