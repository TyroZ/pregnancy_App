<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect('localhost', 'id9752012_pregnancybw', 'pregnancybw');

mysqli_select_db($con, 'id9752012_pregnancybw');

$result = mysqli_query($con, "SELECT COUNT(*) AS total from PATIENT WHERE 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) < 14");

$row = mysqli_fetch_array($result);

$total = $row[0];

//$res = mysqli_fetch_array($r);

    $result = array();

    array_push($result,array(
            //"id"=>$res['id'],
            //"image"=>$res['image']
			"total"=>$row['total']

        )
    );
	echo json_encode(array("result"=>$result));

    mysqli_close($con);

//$json = json_encode($total);

//echo json_encode($total);
//echo "Total rows: " . $total;

?>