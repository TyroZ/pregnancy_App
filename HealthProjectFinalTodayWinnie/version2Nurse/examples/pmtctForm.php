
    <?php
	            $date6="";
                $date7="";
                $date8="";
                $drug6="";
                $drug7="";
                $drug8="";
                $p_id="";
                
               if ($_SERVER["REQUEST_METHOD"] == "POST" )
              {
                  $p_id =  $_POST["p_Id"];
                  $date6=$_POST["date6"];
                $date7=$_POST["date7"];
                $date8=$_POST["date8"];
                $drug6=$_POST["drug6"];
                $drug7=$_POST["drug7"];
                $drug8=$_POST["drug8"];
				  
//Cleaning and sanitation of collected form data.

				  $date6 = trim($date6);
				  $date6 = stripslashes($date6);
				  $date6 = htmlspecialchars($date6);

                  $p_id = trim($p_id);
				  $p_id = stripslashes($p_id);
				  $p_id = htmlspecialchars($p_id);

				  $date7 = trim($date7);
				  $date7 = stripslashes($date7);
				  $date7 = htmlspecialchars($date7);

				  $date8 = trim($date8);
				  $date8 = stripslashes($date8);
				  $date8 = htmlspecialchars($date8);
				  
				  $drug6 = trim($drug6);
				  $drug6 = stripslashes($drug6);
				  $drug6 = htmlspecialchars($drug6);

				  $drug7 = trim($drug7);
				  $drug7 = stripslashes($drug7);
				  $drug7 = htmlspecialchars($drug7);
				  
				  $drug8 = trim($drug8);
				  $drug8 = stripslashes($drug8);
				  $drug8 = htmlspecialchars($drug8);
				  
				  
}

 
 if (empty($p_id)) {
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
      $stmt1 = $conn->prepare("INSERT INTO ANTENATAL (ARV_DRUGS_GIVEN, DATE_STARTED, P_ID )VALUES (?,?,?)");
      
      $stmt2 = $conn->prepare("INSERT INTO LABOUR_AND_DELIVERY (ARV_DRUGS_GIVEN, DATE_STARTED, P_ID )VALUES (?,?,?)");
      
      $stmt3 = $conn->prepare("INSERT INTO BABY (ARV_DRUGS_GIVEN, DATE_STARTED, P_ID )VALUES (?,?,?)");
      
      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.
      $stmt1->bind_param("ssi", md5($drug6), $date6, $p_id); //s means DBMS expect string datatype
      
      $stmt2->bind_param("ssi", md5($drug7), $date7, $p_id ); //s means DBMS expect string datatype
      
      $stmt3->bind_param("ssi", md5($drug8), $date8, $p_id); //s means DBMS expect string datatype
      
      $p_id = $p_id;
      $date6 = $date6;
	  $date7 = $date7;
      $date8= $date8;
      $drug6 = $drug6;
      $drug7 = $drug7;
      
    //$stmt->execute(); will be enough to just insert the record, but to also get feedback on wherther it was successful or not, use as 
    //part of an if statement as below.
    if($stmt1->execute() && $stmt2->execute() && $stmt3->execute() )
      {

			echo("record inserted");
      }
    else {
			echo "Error inserting record: " . $stmt1->error;  //print any error messages 
    }

    $stmt1->close();

    }
    
    ?>