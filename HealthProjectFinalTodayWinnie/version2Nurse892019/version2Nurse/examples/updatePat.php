 <?php
	            $p_id="";
                $mobile="";
                $dob="";
                $fName="";
                $occupation="";
                $email="";
                $dueDate="";
                $pOfWork="";
                
                
               if ($_SERVER["REQUEST_METHOD"] == "POST")
              {
                  $p_id =  $_POST["pid"];
                  $mobile=$_POST["mobile"];
                $dob=$_POST["dob"];
                $fName=$_POST["fName"];
                $occupation=$_POST["occupation"];
                $email=$_POST["email"];
                $dueDate=$_POST["dueDate"];
                $pOfWork=$_POST["pOfWork"];
				  
//Cleaning and sanitation of collected form data.

				  $mobile = trim($mobile);
				  $mobile = stripslashes($mobile);
				  $mobile = htmlspecialchars($mobile);

                    $p_id = trim($p_id);
				  $p_id = stripslashes($p_id);
				  $p_1d = htmlspecialchars($p_id);

				  $dob = trim($dob);
				  $dob = stripslashes($dob);
				  $dob = htmlspecialchars($dob);

				  $fName = trim($fName);
				  $fName = stripslashes($fName);
				  $fName = htmlspecialchars($fName);
				  
				  $occupation = trim($occupation);
				  $occupation = stripslashes($occupation);
				  $occupation = htmlspecialchars($occupation);

				  $email = trim($email);
				  $email = stripslashes($email);
				  $email = htmlspecialchars($email);
				  
				  $dueDate =trim($dueDate);
				  $dueDate =stripslashes($dueDate);
				  $dueDate =htmlspecialchars($dueDate);
				  
				  $pOfWork =trim($pOfWork);
				  $pOfWork =stripslashes($pOfWork);
				  $pOfWork =htmlspecialchars($pOfWork);
				  
}

 
 if (empty($p_id)) {
      echo "pfghf ID is required";
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
      
      $patient = $_POST['pid'];

      //Create the prepared statement 
      $sql = "UPDATE PATIENT SET FIRSTNAME=?, MOBILE=?, EMAIL=?, DOB=?, PLACEOFWORK=?, OCCUPATION=?, DUE_DATE=? WHERE P_ID= '$patient' ";
      
      $stmt1 =  $conn->prepare($sql);

      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.
      $stmt1->bind_param('sssssss', $fName ,$mobile, $email,$dob, $pOfWork, $occupation, $dueDate); //s means DBMS expect string datatype
      
      
    //$stmt->execute(); will be enough to just insert the record, but to also get feedback on wherther it was successful or not, use as 
    //part of an if statement as below.
    if($stmt1->execute())
      {

			echo("Patient updated");
      }
    else {
			echo "Error inserting record: " . $stmt1->error;  //print any error messages 
    }

    $stmt1->close();

    }
    
    ?>