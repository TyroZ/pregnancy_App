<?php
        
              $p_id="";
                $succFail="";
                $type="";
                
                if ($_SERVER["REQUEST_METHOD"] == "GET")
              {
                  $p_id =  $_GET["pid"];
                  $succFail=$_GET["succFail"];
                $type=$_GET["type"];
                
                
                 $succFail = trim($succFail);
				  $succFail = stripslashes($succFail);
				  $succFail = htmlspecialchars($succFail);

                    $p_id = trim($p_id);
				  $p_id = stripslashes($p_id);
				  $p_id = htmlspecialchars($p_id);

				  $type = trim($type);
				  $type = stripslashes($type);
				  $type = htmlspecialchars($type);
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
      
      
      if(!empty($_GET["succFail"])){
          
        $sql1 = "UPDATE PATIENT SET ARCHIVE=? WHERE P_ID= ". $_GET["pid"] ;
      
      $stmt1 =  $conn->prepare($sql1);
      $stmt1->bind_param('s', $_GET["succFail"]);
      $stmt1->execute();
      
}
     
if(!empty($_GET["type"])){
          
        $sql2 = "UPDATE PATIENT SET REASON=? WHERE P_ID= ". $_GET["pid"] ;
      
      $stmt2 =  $conn->prepare($sql2);
      $stmt2->bind_param('s', $_GET["type"]);
      $stmt2->execute();
      
}
    }
    if ($stmt2->execute() || $stmt1->execute())
{
    header("Location: patients.php");
    exit;
}
?>
    
        