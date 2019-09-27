<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['location'])&&isset($_POST['latlong'])){
	$name = $_POST['location'];
	$phone = $_POST['latlong'];
	
	//Query to insert a movie
	$query = "INSERT INTO HEALTH_FACILITY(FACILITY_NAME, LAT_LONG) VALUES (?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ss",$name,$phone);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Log Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding log";
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