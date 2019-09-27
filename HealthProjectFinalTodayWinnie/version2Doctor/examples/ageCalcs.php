<?php
$connect = mysqli_connect("localhost","id9752012_pregnancybw","pregnancybw","id9752012_pregnancybw");
   
		
		$sql = "SELECT DOB FROM PATIENT WHERE P_ID = 1";
		
		
		$sql = "SELECT DATEDIFF(hour,DOB,GETDATE()) FROM PATIENT WHERE P_ID = 1";
		
		
		$results = mysqli_query($connect, $sql);

echo $results;
$date = date("d-m-Y");

echo $date

?>