<?php 
	require 'patientMarkersEME.php';
	$patM = new patientMarkers;
	$patM->setId($_REQUEST['P_ID']);
	$patM->setLat($_REQUEST['LATITUDE']);
	$patM->setLng($_REQUEST['LONGITUDE']);
	$status = $patM->updateCollegesWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>