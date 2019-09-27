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
				  $p_id = htmlspecialchars($p_id);

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
      
      
               
      if(!empty($_POST["fName"])){
          
        $sql1 = "UPDATE PATIENT SET FIRSTNAME=? WHERE P_ID= ". $_POST["pid"] ;
      
      $stmt1 =  $conn->prepare($sql1);
      $stmt1->bind_param('s', $fName);
      $stmt1->execute();
      
}
			
    
      if(!empty($_POST["mobile"])){
          
        $sql2 = "UPDATE PATIENT SET MOBILE=? WHERE P_ID=". $_POST["pid"];
      
      $stmt2 =  $conn->prepare($sql2);
      $stmt2->bind_param('s', $mobile);
      $stmt2->execute();
      
}
			  
      if(!empty($_POST["dob"])){
          
        $sql3 = "UPDATE PATIENT SET  DOB=? WHERE P_ID= ". $_POST["pid"];
      
      $stmt3 =  $conn->prepare($sql3);
      $stmt3->bind_param('s', $dob);
      $stmt3->execute();
      
}
			  
      if(!empty($_POST["occupation"])){
          
        $sql4 = "UPDATE PATIENT SET OCCUPATION=? WHERE P_ID= ". $_POST["pid"];
      
      $stmt4 =  $conn->prepare($sql4);
      $stmt4->bind_param('s', $occupation);
      $stmt4->execute();
      
}
			  
      if(!empty($_POST["email"])){
          
        $sql5 = "UPDATE PATIENT SET EMAIL=? WHERE P_ID= ". $_POST["pid"];
      
      $stmt5 =  $conn->prepare($sql5);
      $stmt5->bind_param('s', $email);
      $stmt5->execute();
      
}
			  
      if(!empty($_POST["dueDate"])){
          
        $sql6 = "UPDATE PATIENT SET DUE_DATE=? WHERE P_ID= ". $_POST["pid"];
      
      $stmt6 =  $conn->prepare($sql6);
      $stmt6->bind_param('s', $dueDate);
      $stmt6->execute();
      
}
			  
      if(!empty($_POST["pOfWork"])){
          
        $sql7 = "UPDATE PATIENT SET PLACEOFWORK=? WHERE P_ID= ". $_POST["pid"];
      
      $stmt7 =  $conn->prepare($sql7);
      $stmt7->bind_param('s', $pOfWork);
      $stmt7->execute();
      
}

    }
      
    
    ?>