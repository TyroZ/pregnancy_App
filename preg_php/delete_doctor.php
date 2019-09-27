<?php
include 'db_configuration.php';
$response = array();
//Check for mandatory parameter movie_id
if(isset($_POST['pd_id'])){
	$pdId = $_POST['pd_id'];
	$query = "DELETE FROM PATIENT_DOCTOR WHERE PD_ID=?";
	if($stmt = $con->prepare($query)){
		//Bind movie_id parameter to the query
		$stmt->bind_param("i",$pdId);
		$stmt->execute();
		//Check if the movie got deleted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Doctor got deleted successfully";
			
		}else{
			$response["success"] = 0;
			$response["message"] = "Doctor not found";
		}					
	}else{
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}
 
}else{
	$response["success"] = 0;
	$response["message"] = "missing parameter pd_id";
}
echo json_encode($response);
?>