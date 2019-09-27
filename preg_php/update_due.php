<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['duedate'])&&isset($_POST['p_id'])){
	$name = $_POST['duedate'];
	$pdId = $_POST['p_id'];
	
//	$rating = $_POST['rating'];
	
	//Query to update a movie
	$query = "UPDATE PATIENT SET DUE_DATE=? WHERE OMANG=?";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("si",$name,$pdId);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got updated
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Due Date Details successfully updated";
			
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