<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['name'])&&isset($_POST['latitude'])&&isset($_POST['longitude'])&&isset($_POST['view'])){
	$name = $_POST['name'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$view = $_POST['view'];
	
	//Query to insert a movie
	$query = "INSERT INTO EMERGENCY(NAME, LATITUDE, LONGITUDE, VIEW) VALUES (?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssss",$name,$latitude,$longitude,$view);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "SOS Sent";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while sending SOS";
		}					
	}else{
		//Some error while inserting
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}
 
}else{
	//Mandatory parameters are missing
	$response["success"] = 0;
	$response["message"] = "missing mandatory parameters";
}
//Displaying JSON response
echo json_encode($response);
?>