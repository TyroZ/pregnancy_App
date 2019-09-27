
	        <?php
	            $p_id="";
                $date1="";
                $result1="";
                $date11="";
                $result11="";
                $date2="";
                $result2="";
                $date22="";
                $result22="";
                $date3="";
                $result3="";
                $date33="";
                $result33="";
                $date4="";
                $result4="";
                $date44="";
                $result44="";
                $date5="";
                $result5="";
                $date55="";
                $result55="";
                
               if ($_SERVER["REQUEST_METHOD"] == "POST")
              {
                  $p_id =  $_POST["p_id"];
                  $date1=$_POST["date1"];
                $result1=$_POST["result1"];
                $date11=$_POST["date11"];
                $result11=$_POST["result11"];
                $date2=$_POST["date2"];
                $result2=$_POST["result2"];
                $date22=$_POST["date22"];;
                $result22=$_POST["result22"];
                $date3=$_POST["date3"];
                $result3=$_POST["result3"];
                $date33=$_POST["date33"];
                $result33=$_POST["result33"];
                $date4=$_POST["date4"];
                $result4=$_POST["result4"];
                $date44=$_POST["date44"];
                $result44=$_POST["result44"];
                $date5=$_POST["date5"];
                $result5=$_POST["result5"];
                $date55=$_POST["date55"];
                $result55=$_POST["result55"];
				  
//Cleaning and sanitation of collected form data.

				  $date1 = trim($date1);
				  $date1 = stripslashes($date1);
				  $date1 = htmlspecialchars($date1);

                    $p_id = trim($p_id);
				  $p_id = stripslashes($p_id);
				  $p_1d = htmlspecialchars($p_id);

				  $result1 = trim($result1);
				  $result1 = stripslashes($result1);
				  $result1 = htmlspecialchars($result1);

				  $date11 = trim($date11);
				  $date11 = stripslashes($date11);
				  $date11 = htmlspecialchars($date11);
				  
				  $result11 = trim($result11);
				  $result11 = stripslashes($result11);
				  $result11 = htmlspecialchars($result11);

				  $date2 = trim($date2);
				  $date2 = stripslashes($date2);
				  $date2 = htmlspecialchars($date2);
				  
				  $result2 =trim($result2);
				  $result2 =stripslashes($result2);
				  $result2 =htmlspecialchars($result2);
				  
				  $date22 =trim($date22);
				  $date22 =stripslashes($date22);
				  $date22 =htmlspecialchars($date22);
				  
				  $result22 =trim($result22);
				  $result22 =stripslashes($result22);
				  $result22 =htmlspecialchars($result22);
				  
                
				  $date3 =trim($date3);
				  $date3 =stripslashes($date3);
				  $date3 =htmlspecialchars($date3);
				  
				  $result3=trim($result3);
				  $result3=stripslashes($result3);
				  $result3=htmlspecialchars($result3);
				  
				  $date33 =trim($date33);
				  $date33 =stripslashes($date33);
				  $date33 =htmlspecialchars($date33);
				  
				  
				  $result33 = trim($result33);
				  $result33 = stripslashes($result33);
				  $result33 = htmlspecialchars($result33);
				  
				  
				  
				  $date4 = trim($date4);
				  $date4 = stripslashes($date4);
				  $date4 = htmlspecialchars($date4);
				  
				  $result4 = trim($result4);
				  $result4 = stripslashes($result4);
				  $result4 = htmlspecialchars($result4);
				  
				  $date44 = trim($date44);
				  $date44 = stripslashes($date44);
				  $date44 = htmlspecialchars($date44);
				  
				  $result44 = trim($result44);
				  $result44 = stripslashes($result44);
				  $result44 = htmlspecialchars($result44);
				  
				  $date5 = trim($date5);
				  $date5 = stripslashes($date5);
				  $date5 = htmlspecialchars($date5);
				  
				  $result5 = trim($result5);
				  $result5 = stripslashes($result5);
				  $result5 = htmlspecialchars($result5);
				  
				  $date55 = trim($date55);
				  $date55 = stripslashes($date55);
				  $date55 = htmlspecialchars($date55);
				  
				  $result55 = trim($result55);
				  $result55 = stripslashes($result55);
				  $result55 = htmlspecialchars($result55);


}

 
 if (empty($date1)) {
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
      echo "Connected successfully";


      //Create the prepared statement 
      $stmt1 = $conn->prepare("INSERT INTO PRE_TEST_EDUCATION_COUNSELING (INITIAL_DATE_CONDUCTED, INITIAL_OUTCOME, RE_DATE_CONDUCTED, RE_OUTCOME, P_ID )VALUES (?,?,?,?,?)");
      
      $stmt2 = $conn->prepare("INSERT INTO HIV_TESTING (INITIAL_DATE_CONDUCTED, INITIAL_OUTCOME, RE_DATE_CONDUCTED, RE_OUTCOME, P_ID )VALUES (?,?,?,?,?)");
      
      $stmt3 = $conn->prepare("INSERT INTO POST_TEST_COUNSELLING (INITIAL_DATE_CONDUCTED, INITIAL_OUTCOME, RE_DATE_CONDUCTED, RE_OUTCOME, P_ID )VALUES (?,?,?,?,?)");
      
      $stmt4 = $conn->prepare("INSERT INTO CD_4_CELL_COUNT (INITIAL_DATE_CONDUCTED, INITIAL_OUTCOME, RE_DATE_CONDUCTED, RE_OUTCOME, P_ID )VALUES (?,?,?,?,?)");
      
      $stmt5 = $conn->prepare("INSERT INTO INFANT_FEEDING_COUNSELLING (INITIAL_DATE_CONDUCTED, INITIAL_OUTCOME, RE_DATE_CONDUCTED, RE_OUTCOME, P_ID )VALUES (?,?,?,?,?)");
 
      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.
      $stmt1->bind_param("ssssi", $date1, $result1,$date11 , $result11, $p_id); //s means DBMS expect string datatype
      
      $stmt2->bind_param("ssssi", $date2, $result2,$date22 , $result22, $p_id ); //s means DBMS expect string datatype
      
      $stmt3->bind_param("ssssi", $date3, $result3,$date33 , $result33, $p_id); //s means DBMS expect string datatype
      
      $stmt4->bind_param("ssssi", $date4, $result4,$date44 , $result44, $p_id ); //s means DBMS expect string datatype
      
      $stmt5->bind_param("ssssi", $date5, $result5,$date55 , $result55, $p_id ); //s means DBMS expect string datatype
      
      $date1 = $date1;
	  $result1 = $result1;
      $date11= $date11;
      $result11 = $result11;
      $date2 = $date2;
      $result2 = $result2;
      $date22 = $date22;
      $result22= $result22;
      $date3=$date3;
      $result3=$result3;
      $date33=$date33;
      $result33 = $result33;
      $date4 = $date4; 
      $result4 = $result4;
      $date44 = $date44;
      $result44 = $result44;
      $date5 = $date5; 
      $result5 = $result5;
      $date55 = $date55;
      $result55 = $result55; 
      $p_id = $p_id;
      
    //$stmt->execute(); will be enough to just insert the record, but to also get feedback on wherther it was successful or not, use as 
    //part of an if statement as below.
    if($stmt1->execute() && $stmt2->execute() && $stmt3->execute() && $stmt4->execute() && $stmt5->execute())
      {

			echo("record inserted");
      }
    else {
			echo "Error inserting record: " . $stmt1->error;  //print any error messages 
    }

    $stmt1->close();

    }
    
    ?>