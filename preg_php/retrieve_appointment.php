<?php

$id = $_GET['p_id'];

require_once('config_moods.php');

$sql = "SELECT * FROM APPOINTMENTS WHERE P_ID=$id";
$r = mysqli_query($con,$sql);

$result = array();

while ($row = mysqli_fetch_array($r)){
    array_push($result,array(
        "REASON"=>$row['REASON'],
        "APP_DATE"=>$row['APP_DATE'],
        "START_TIME"=>$row['START_TIME'],
		"END_TIME"=>$row['END_TIME']

    ));}

echo json_encode(array('result'=>$result));

mysqli_close($con);