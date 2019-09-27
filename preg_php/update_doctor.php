<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['name'])&&isset($_POST['pd_id'])&&isset($_POST['phone'])&&isset($_POST['email'])){
	$name = $_POST['name'];
	$pdId = $_POST['pd_id'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
//	$rating = $_POST['rating'];
	
	//Query to update a movie
	$query = "UPDATE PATIENT_DOCTOR SET NAME=?,PHONE=?,EMAIL=? WHERE PD_ID=?";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssisi",$name,$phone,$email,$pdId);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got updated
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Doctor Details successfully updated";
			
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Doctor not found";
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