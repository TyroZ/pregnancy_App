<?php
include 'db_configuration.php';
$response = array();
 
//Check for mandatory parameters
if(isset($_POST['lastname'])&&isset($_POST['firstname'])&&isset($_POST['omang'])&&isset($_POST['passport'])&&isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['location'])&&isset($_POST['dob'])&&isset($_POST['occupation'])&&isset($_POST['work'])&&isset($_POST['password'])){
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$omang = $_POST['omang'];
	$passport = $_POST['passport'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$dob = $_POST['dob'];
	$occupation = $_POST['occupation'];
	$work = $_POST['work'];
	$password = $_POST['password'];
	
	//Query to insert a movie
	$query = "INSERT INTO PATIENT(LASTNAME, FIRSTNAME, OMANG, PASSPORT_NO, MOBILE, EMAIL, PRIMARY_LOCATION, DOB, OCCUPATION, PLACEOFWORK, PASSWORD) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("sssssssssss",$lastname,$firstname,$omang,$passport,$mobile,$email,$location,$dob,$occupation,$work,$password);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Pateint Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding patient";
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