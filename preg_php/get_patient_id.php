<?php
include 'db_configuration.php';
$movieArray = array();
$response = array();
//Check for mandatory parameter movie_id
if(isset($_GET['omang'])){
	$omang = $_GET['omang'];
	//Query to fetch movie details
	$query = "SELECT P_ID FROM PATIENT WHERE OMANG=?";
	if($stmt = $con->prepare($query)){
		//Bind movie_id parameter to the query
		$stmt->bind_param("i",$omang);
		$stmt->execute();
		//Bind fetched result to variables $movieName, $genre, $year and $rating
		$stmt->bind_result($p_id);
		//Check for results		
		if($stmt->fetch()){
			//Populate the movie array
			$movieArray["p_id"] = $p_id;
			
			
			//$movieArray["rating"] = round($rating,1);
			$response["success"] = 1;
			$response["data"] = $movieArray;
		
		
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "ID not found";
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