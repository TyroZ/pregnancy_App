<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['omang'])&&isset($_POST['location'])&&isset($_POST['date'])&&isset($_POST['time'])){
	$name = $_POST['omang'];
	$phone = $_POST['location'];
	$email = $_POST['date'];
	$time = $_POST['time'];
	
	//Query to insert a movie
	$query = "INSERT INTO PLANNED_VISITS(PATIENT_OMANG, LOCATION, VISIT_DATE, VISIT_TIME) VALUES (?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssss",$name,$phone,$email,$time);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Appointment Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding appointment";
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