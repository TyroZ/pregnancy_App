<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['latitude'])&&isset($_POST['p_id'])&&isset($_POST['longitude'])&&isset($_POST['token'])){
	$latitude = $_POST['latitude'];
	$pdId = $_POST['p_id'];
	$longitude = $_POST['longitude'];
	$token = $_POST['token'];
	
//	$rating = $_POST['rating'];
	
	//Query to update a movie
	$query = "UPDATE PATIENT SET LATITUDE=?, LONGITUDE = ?, TOKEN = ? WHERE OMANG=?";
	//Prepare the query
	if($stmt = $con->prepare($query)){-
		//Bind parameters
		$stmt->bind_param("sssi",$latitude,$longitude,$token,$pdId);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got updated
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Device Details successfully updated";
			
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Patient not found";
		}					
	}else{
		//Some error while updating
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