<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['patient_email'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$p_email = $_POST['patient_email'];
	
	//Query to insert a movie
	$query = "INSERT INTO PATIENT_DOCTOR( NAME, PHONE, EMAIL, PATIENT_EMAIL) VALUES (?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssis",$name,$phone,$email,$p_email);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "DOCTOR Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding DOCTOR";
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