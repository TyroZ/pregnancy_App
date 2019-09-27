<?php
include 'db_configuration.php';
$movieArray = array();
$response = array();
//Check for mandatory parameter movie_id
if(isset($_GET['pd_id'])){
	$pdId = $_GET['pd_id'];
	//Query to fetch movie details
	$query = "SELECT NAME, PHONE, EMAIL FROM PATIENT_DOCTOR WHERE PD_ID=?";
	if($stmt = $con->prepare($query)){
		//Bind movie_id parameter to the query
		$stmt->bind_param("i",$pdId);
		$stmt->execute();
		//Bind fetched result to variables $movieName, $genre, $year and $rating
		$stmt->bind_result($name,$phone,$email);
		//Check for results		
		if($stmt->fetch()){
			//Populate the movie array
			$movieArray["pd_id"] = $pdId;
			$movieArray["name"] = $name;
			$movieArray["phone"] = $phone;
			$movieArray["email"] = $email;
			//$movieArray["rating"] = round($rating,1);
			$response["success"] = 1;
			$response["data"] = $movieArray;
		
		
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Movie not found";
		}
		$stmt->close();
 
 
	}else{
		//Whe some error occurs
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
		
	}
 
}else{
	//When the mandatory parameter movie_id is missing
	$response["success"] = 0;
	$response["message"] = "missing parameter movie_id";
}
//Display JSON response
echo json_encode($response);
?>