<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['omang'])&&isset($_POST['title'])&&isset($_POST['date'])&&isset($_POST['time'])&&isset($_POST['moretime'])){
	$name = $_POST['omang'];
	$phone = $_POST['title'];
	$email = $_POST['date'];
	$time = $_POST['time'];
	$moretime = $_POST['moretime'];
	
	//Query to insert a movie
	$query = "INSERT INTO APPOINTMENTS (PATIENT_ID, DOCTOR_ID, REASON, APP_DATE, START_TIME) VALUES (?,?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("sssss",$name,$phone,$email,$time,$moretime);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Appointment Requested";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding request";
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