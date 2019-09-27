<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['title'])&&isset($_POST['entry'])&&isset($_POST['omang'])){
	$name = $_POST['title'];
	$phone = $_POST['entry'];
	$email = $_POST['omang'];
	//$p_email = $_POST['patient_email'];
	
	//Query to insert a movie
	$query = "INSERT INTO DAILY_LOGS( TITLE, ENTRY, PATIENT_OMANG) VALUES (?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("sss",$name,$phone,$email);
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