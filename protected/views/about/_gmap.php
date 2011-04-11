<?php
Yii::import('ext.gmaps.*');

$gMap = new EGMap();
$gMap->zoom = 13;
$mapTypeControlOptions = array(
  'position'=> EGMapControlPosition::LEFT_BOTTOM,
  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);

$gMap->mapTypeControlOptions= $mapTypeControlOptions;

$gMap->setCenter(40.29789,-111.72821);

// Create marker
$marker = new EGMapMarker(40.29789,-111.72821);
$gMap->addMarker($marker);

// Create marker with label
$marker = new EGMapMarkerWithLabel(40.29789,-111.72821, array('title' => 'Marker With Label'));

$gMap->renderMap();
?>
<style type="text/css">
.labels {
   color: red;
   background-color: white;
   font-family: "Lucida Grande", "Arial", sans-serif;
   font-size: 10px;
   font-weight: bold;
   text-align: center;
   width: 40px;
   border: 2px solid black;
   white-space: nowrap;
}
</style>


