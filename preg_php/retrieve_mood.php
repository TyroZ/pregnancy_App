<?php

$id = $_GET['id'];

require_once('config_moods.php');

$sql = "SELECT * FROM DAILY_LOGS WHERE PATIENT_OMANG=$id";
$r = mysqli_query($con,$sql);

$result = array();

while ($row = mysqli_fetch_array($r)){
    array_push($result,array(
        "TITLE"=>$row['TITLE'],
        "ENTRY"=>$row['ENTRY'],
        "CREATED_AT"=>$row['CREATED_AT']

    ));}

echo json_encode(array('result'=>$result));

mysqli_close($con);