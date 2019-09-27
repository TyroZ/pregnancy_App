              
   <?php
                $pID;
                $desc;
                $number;
                $country;
                $city;
                $address;
                $lName;
                $fName;
                $email;
                $natID;
                $occupacy;
                $status;
                
               if ($_SERVER["REQUEST_METHOD"] == "POST")
              {
                  
				  $pID =  $_POST["pID"];
				  $desc =  $_POST["desc"];
				  $number = $_POST["number"];
				  $country = $_POST["country"];
				  $city = $_POST["city"];
				  $address = $_POST["address"];
				  $lName = $_POST["lName"];
				  $fName = $_POST["fName"];
				  $email = $_POST["email"];
				  $natID = $_POST["natID"];
				  $occupacy = $_POST["occupacy"];
				  $status = $_POST["status"];
//Cleaning and sanitation of collected form data.

				  $pID = trim($pID);
				  $pID = stripslashes($pID);
				  $pID = htmlspecialchars($pID);

				  $desc = trim($desc);
				  $desc = stripslashes($desc);
				  $desc = htmlspecialchars($desc);

				  $number = trim($number);
				  $number = stripslashes($number);
				  $number = htmlspecialchars($number);
				  
				  $country = trim($country);
				  $country = stripslashes($country);
				  $country = htmlspecialchars($country);

				  $city = trim($city);
				  $city = stripslashes($city);
				  $city = htmlspecialchars($city);
				  
				  $address =trim($address);
				  $address =stripslashes($address);
				  $address =htmlspecialchars($address);
				  
				  $lName =trim($lName);
				  $lName =stripslashes($lName);
				  $lName =htmlspecialchars($lName);
				  
				  $fName =trim($fName);
				  $fName =stripslashes($fName);
				  $fName =htmlspecialchars($fName);
				  
                
				  $email =trim($email);
				  $email =stripslashes($email);
				  $email =htmlspecialchars($email);
				  
				  $natID =trim($natID);
				  $natID =stripslashes($natID);
				  $natID =htmlspecialchars($natID);
				  
				  $occupacy =trim($occupacy);
				  $occupacy =stripslashes($occupacy);
				  $occupacy =htmlspecialchars($occupacy);
				  
				  
				  $status = trim($status);
				  $status = stripslashes($status);
				  $status = htmlspecialchars($status);

}

 
 if (empty($pID)) {
      echo "Patient ID is required";
      exit();
    }else{
 
       //Database connection credentials. Replace with your own details. 
       //Better to have these in a separate .php file, for reuse.
      $servername = "localhost";
      $username = "id9752012_pregnancybw";
      $pass = "pregnancybw";
      $dbname = "id9752012_pregnancybw";


      // Create connection
      $conn = new mysqli($servername, $username, $pass,$dbname );

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";




      //Create the prepared statement 
      $stmt = $conn->prepare("INSERT INTO PATIENT (P_ID, LASTNAME, FIRSTNAME,HEALTH_CONDITION,OMANG,MOBILE,PRIMARY_LOCATION, EMAIL ,OCCUPATION,PLACEOFWORK, ADDRESS,STATUS )VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
 
      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.
      $stmt->bind_param("isssiissssss", $pID, $lName,$fName ,$desc,$natID, $number ,$city , $email,$country,$occupacy,$address,$status ); //s means DBMS expect string datatype
      
      $pID = $pID;
	  $desc = $desc;
      $number= $number;
      $country = $country;
      $city = $city;
      $address = $address;
      $lName = $lName;
      $fName= $fName;
      $email=$email;
      $natID=$natID;
      $occupacy=$occupacy;
      $status = $status;
    //$stmt->execute(); will be enough to just insert the record, but to also get feedback on wherther it was successful or not, use as 
    //part of an if statement as below.
    if($stmt->execute())
      {

			echo("record inserted");
      }
    else {
			echo "Error inserting record: " . $stmt->error;  //print any error messages 
    }

    $stmt->close();

    }
    
    ?>
    <?php
    location: patients.php;
?>