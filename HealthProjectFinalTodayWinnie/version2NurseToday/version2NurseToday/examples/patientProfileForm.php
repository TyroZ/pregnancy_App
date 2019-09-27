<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="#">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pregnancy App
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="" style="background-image: url('images/background.PNG'); background-repeat: no-repeat; background-size: cover">
    <?php include("header.php"); ?>
      <!-- End Navbar -->
       <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">The Patient's Information</h4>
                  <p class="card-category"> Here is the information about this patient</p>
                </div>
                <div class="card-body">
                 <table class="table-responsive" style="overflow: hidden;">
                      
<?php
	//connect to db
	//$connect = mysqli_connect("localhost","id9752012_pregnancybw","pregnancybw","id9752012_pregnancybw");
    $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');    
     
			
	if(isset($_GET['P_ID'])) {
        $txt= $_GET['P_ID'];
		$result = mysqli_query($connect,"SELECT * FROM PATIENT where P_ID=" . $txt); 
		
		    if(mysqli_num_rows($result) >= 1){
                
                
              echo " <div>"; 
            
            
            $i = 1;
		        while($row = mysqli_fetch_array($result)){
		    echo "<tbody>";        
		    echo "<tr id>";
		    echo " <form  method='post' enctype='multipart/form-data' action='updatePat.php'> ";
		            echo "<h3 style='font-weight:bold'> GENERAL INFORMATION</h3>";  
		            
                    echo "<div class='row'> ";
                    
                    echo "<div class='col-md-5'>";
                    echo "  <div class='form-group'> ";
                    echo "FIRSTNAME:<br>";
                    echo "<input type='text' class='form-control' name='fName' placeholder=" . $row['FIRSTNAME'] ." > ";
                    echo "</div> ";
                    echo " </div> ";
            
                     
                    echo " <div class='col-md-3'> ";
                    echo "  <div class='form-group'> ";
                     echo "MOBILE:<br>";
                    echo "   <input type='text' class='form-control' name='mobile' placeholder=" . $row['MOBILE'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                     
                     
                    echo " <div class='col-md-3'>";
                    echo "  <div class='form-group'> ";
                    echo "PATIENT ID:<br>";
                    echo "    <input type='number' class='form-control' name='pid' value=" . $row['P_ID']. ">";
                    echo "   </div>";
                    echo " </div>";
                    echo " </div>";
                     
                     
                    echo " <div class='row'> ";
                    echo " <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "EMAIL:<br>";
                    echo "  <input type='email' class='form-control' name='email' placeholder=" . $row['EMAIL'].">";
                    echo "  </div>";
                    echo "  </div>";
                  
                    echo "   <div class='col-md-3'>";
                    echo "     <div class='form-group'>";
                    echo "DATE OF BIRTH:<br>";
                    echo "       <input type='text' class='form-control' name='dob' value=" . $row['DOB'] . ">";
                    echo "     </div>";
                    echo "   </div>";
                   
                    echo "   <div class='col-md-3'>";
                    echo "     <div class='form-group'>";
                    echo "PLACE OF WORK:<br>";
                    echo " <input type='text' class='form-control' name='pOfWork' placeholder=" . $row['PLACEOFWORK'] . "> ";
                    echo "   </div ";
                    echo "   </div>";
                    echo "   </div>";
                     echo "   </div>";
                   
                    echo " <div class='row'> ";
                    echo " <div class='col-md-4'>";
                    echo " <div class='form-group'>";
                    echo "OCCUPATION:<br>"; 
                    echo " <input type='text' class='form-control' name='occupation' placeholder=" . $row['OCCUPATION'] . "> ";
                    echo " </div>";
                    echo " </div>";
                   
                    
                    echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo "DUE DATE:<br>";  
                    echo " <input type='date' class='form-control' name='dueDate' value=" . $row['DUE_DATE'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div> ";
                   
                echo "<button type='submit' class='btn btn-primary pull-right' >Update Patient </button>";
                   
                 
                      
		            
                    
echo "</form>";
echo "<form  method='post' enctype='multipart/form-data' action='indexPAT.php'>";
                  echo " <div style='visibility:hidden' class='col-md-3'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>PATIENT ID</label> ";
                    echo "    <input type='number' class='form-control' name='pid' value=" . $row['P_ID']. ">";
                    echo "   </div>";
                    echo " </div>";
                    
                 echo "<button type='submit' class='btn btn-primary pull-right' > View Location </button>";
                 echo " </div>";
                    echo "   </div>";
                 echo "</form>"; 
                    echo "<div class='clearfix'></div>"; 

        
echo "</div";echo "</div";echo "</div";
                    echo "   </div> ";
                    
		     echo "</div";
		     echo "</div";echo "</div";echo "</div";echo "</div";echo "</div";echo "</div";echo "</div";
            echo "</tr>";
            echo "</tbody>";
            
            $i++;
		        }
		        echo "</table>";
                   
		        // Close result set
		        mysqli_free_result($result);
		    } else{
		        echo "No records matching your query were found.";
		    }

	}

                
                
             
                
                
                if(isset($_GET['P_ID'])) {
                    
        $txt= $_GET['P_ID'];
		$result1 = mysqli_query($connect,"SELECT * FROM PRE_TEST_EDUCATION_COUNSELING where P_ID=" . $txt); 
		$result2 = mysqli_query($connect,"SELECT * FROM HIV_TESTING where P_ID=" . $txt);  
		$result3 = mysqli_query($connect,"SELECT * FROM POST_TEST_COUNSELLING where P_ID=" . $txt);
		$result4 = mysqli_query($connect,"SELECT * FROM CD_4_CELL_COUNT where P_ID=" . $txt); 
		$result5 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result6 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result7 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result8 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result9 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result10 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt);
		$result11 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt);  
		$result12 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result13 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		$result14 = mysqli_query($connect,"SELECT * FROM ANTENATAL where P_ID=" . $txt); 
		$result15 = mysqli_query($connect,"SELECT * FROM LABOUR_AND_DELIVERY where P_ID=" . $txt); 
		$result16 = mysqli_query($connect,"SELECT * FROM BABY where P_ID=" . $txt); 
		
		
		    if(mysqli_num_rows($result1) >= 1 && mysqli_num_rows($result2) >= 1 && mysqli_num_rows($result3) >= 1 && mysqli_num_rows($result4) >= 1 && mysqli_num_rows($result5) >= 1){
		        
             echo "<div class='table-responsive' style='width: auto;'>";
		     echo "<table class='table' style='overflow: hidden;'>";
        
		     echo "<h3 style='font-weight:bold'> </h3>"; 
		     
		     echo "<h3 style='font-weight:bold'>HEALTH PROFILE</h3>"; 
		        
		       include("patWithoutInfor.php");
		     
		   echo "<div class='card-body'>";
            echo "<div class='table-responsive'>";     
		     echo "<table border='1' cellpadding='0' cellspacing='0' class='table table-striped'>";
		     echo "<thead class='text-dark table-active' style='font-weight: bolder";
		     
		     echo "<thead class='text-primary'>";
		    echo "<tr>";
		    echo "<td rowspan='2'> </td>";
		    echo "<td align='center' colspan='2'> INITIAL REGISTRATION </td>";
		    echo "<td align='center' colspan='2'> Re - Testing form 36 wkn of Gestation </td>";
		     echo "</tr>";
		     
            echo "<tr>";
		    echo "<td align='center' > Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
		    echo "<td align='center'> Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
            echo "</tr>";
            
            echo "<tr>";
		    echo "<td align='center' > PreTest Education/Counselling </td>";
		    while($row = mysqli_fetch_array($result1)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
            
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > HIV Testing</td>";
		   while($row = mysqli_fetch_array($result2)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > Post Test/Counselling </td>";
		    while($row = mysqli_fetch_array($result3)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
		        }
		    echo "</tr>";
		    echo "<td align='center' > CD4 CellCount </td>";
		    while($row = mysqli_fetch_array($result4)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > Infant Feeding /Counselling </td>";
		    while($row = mysqli_fetch_array($result5)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
		        }
		    echo "</tr>";
            echo "</thead>";
		    echo "</table>";
		        
		        
		        
		        echo " <form  method='POST'  enctype='multipart/form-data '> ";     
		        echo "<h3 style='font-weight:bold'> PMTCT DRUG INTERVENTIONS</h3>"; 
		        
		          
		   echo "<div class='card-body'>";
            echo "<div class='table-responsive'>";     
		     echo "<table border='1' cellpadding='0' cellspacing='0' class='table table-striped'>";
		     echo "<thead class='text-dark table-active' style='font-weight: bolder";
		     
		     echo "<thead class='text-primary'>";
		        echo "<tr>";
		        echo "<td align='center' rowspan='1'> </td>";
		        echo "<td align='center' > ARV DRUGS GIVEN </td>";
		        echo "<td align='center' > DATE STARTED </td>";
		        echo "</tr>";
		     
                echo "<tr>";
                
    		    echo "<td align='center' > ANTENATAL </td>";
    		     while($row = mysqli_fetch_array($result14)){ 
    		    echo "<td>".$row['ARV_DRUGS_GIVEN']. "</td>"; 
                echo "<td>".$row['DATE_STARTED']."</td>";
    		     }
    		    echo "</tr>";
    		    
		        echo "<tr>";
    		    echo "<td align='center' > LABOUR AND DELIVERY</td>";
    		    while($row = mysqli_fetch_array($result15)){ 
    		    echo "<td>".$row['ARV_DRUGS_GIVEN']."</td>"; 
                echo "<td>".$row['DATE_STARTED']."</td>";
                
    		    }
    		    echo "</tr>";
    		    
		        echo "<tr>";
    		    echo "<td align='center' > BABY </td>";   
    		    while($row = mysqli_fetch_array($result16)){ 
    		    echo "<td>".$row['ARV_DRUGS_GIVEN']."</td>";
                echo "<td>".$row['DATE_STARTED']."</td>";
    		    }
                echo "</thead>";
                
                       
		        echo "</table>";
		        echo "</div>";
                    
                echo "<div class='clearfix'></div>";
		             
echo "</form>";
		        // Close result set
		        mysqli_free_result($result1);
		    } else{
		        
                echo "<div class='table-responsive' style='width: auto;'>";
                echo "<table class='table' style='overflow: hidden;'>";
           
                echo "<h3 style='font-weight:bold'> </h3>"; 
                
                echo "<h3 style='font-weight:bold'>HEALTH PROFILE</h3>";

                 include("patWithInfor.php");
		        
		    echo " <form  method='POST'  enctype='multipart/form-data '> "; 
		     
		     echo "<h3 style='font-weight:bold'> PMTCT </h3>"; 
             
             
		   echo "<div class='card-body'>";
            echo "<div class='table-responsive'>";     
		     echo "<table border='1' cellpadding='0' cellspacing='0' class='table table-striped'>";
		     echo "<thead class='text-dark table-active' style='font-weight: bolder";
		    
		     echo "<thead class='text-primary'>";
		    echo "<tr>";
		    echo "<td rowspan='2'> </td>";echo "<td align='center' colspan='2'> INITIAL REGISTRATION </td>";
		    echo "<td align='center' colspan='2'> Re - Testing form 36 wkn of Gestation </td>";
		    echo "</tr>";
		     
            echo "<tr>";
		    echo "<td align='center' > Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
		    echo "<td align='center'> Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
            echo "</tr>";
            
            echo "<tr>";
		    
		    echo "<td align='center' > PreTest Education/Counselling </td>";  
		    echo "<td>";
		    echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date1'>";
            echo  "</div>";
            echo  "</td>";
            
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result1'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<td>";
            echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date11'>";
            echo  "</div>";
            echo  "</td>"; 
            
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result11'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<td style='visibility:hidden'>";
            echo  "<input type='number' class='form-control'  name='p_id' value=" . $_GET['P_ID'] . ">";
            echo "</td>";
            
		    echo "</tr>";
		    
		    echo "<tr>";
		    echo "<td align='center' > HIV Testing</td>";  
		    echo "<td>";
		    echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date2'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result2'>";
            echo "<option value='POSITIVE'>POSITIVE</option>";
            echo "<option value='NEGATIVE'>NEGATIVE</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<td>";
            echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date22'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result22'>";
            echo "<option value='POSITIVE'>POSITIVE</option>";
            echo "<option value='NEGATIVE'>NEGATIVE</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<td style='visibility:hidden'>";
            echo  "<input type='number' class='form-control'  name='p_id' value=" . $_GET['P_ID'] . ">";
            echo "</td>";
            
		    echo "</tr>";
		    
		     echo "<tr>";
		    echo "<td align='center' > Post Test/Counselling </td>";    
		    echo "<td>";
		    echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date3'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result3'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<td>";
            echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date33'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result33'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<td style='visibility:hidden'>";
            echo  "<input type='number' class='form-control'  name='p_id' value=" . $_GET['P_ID'] . ">";
            echo "</td>";
            
            echo "</tr>";
		    
		    echo "<tr>";
		    echo "<td align='center' > CD4 CellCount </td>";
		    echo "<td>";
		    echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date4'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result4'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<td>";
            echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date44'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result44'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<td style='visibility:hidden'>";
            echo  "<input type='number' class='form-control'  name='p_id' value=" . $_GET['P_ID'] . ">";
            echo "</td>";
            
		    echo "</tr>";
		    
		     echo "<tr>";
		    echo "<td align='center' > Infant Feeding /Counselling </td>";
		    echo "<td>";
		    echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date5'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result5'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<td>";
            echo "<div class='form-group'>";
            echo  "<label class='bmd-label-floating'></label>";
            echo  "<input type='date' class='form-control' name='date55'>";
            echo  "</div>";
            echo  "</td>"; 
            echo "<td>";
            echo "<div class='form-group'>";
            echo "<select name='result55'>";
            echo "<option value='EXCELLENT'>EXCELLENT</option>";
            echo "<option value='GOOD'>GOOD</option>";
            echo "<option value='BAD'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<td style='visibility:hidden'>";
            echo  "<input type='number' class='form-control'  name='p_id' value=" . $_GET['P_ID'] . ">";
            echo "</td>";
            
            echo "</thead>";
            
                   
		        echo "</table>";
		        echo "</div>";
                echo "<button type='submit' class='btn btn-primary pull-right' name='update' >Update Patient'S PMTCT </button>";
                    
                echo "<div class='clearfix'></div>";
		             
echo "</form>";


	     
		        echo " <form  method='POST'  enctype='multipart/form-data '> ";     
		        echo "<h3 style='font-weight:bold'> PMTCT DRUG INTERVENTIONS</h3>"; 
		        echo "<div class='card-body'>";
                echo "<div class='table-responsive'>";     
		     echo "<table border='1' cellpadding='0' cellspacing='0' class='table table-striped'>";
		     echo "<thead class='text-dark table-active' style='font-weight: bolder";
		     
		     echo "<thead class='text-primary'>";
		        echo "<tr>";
		        echo "<td > </td>";
		        echo "<td align='center' > ARV DRUGS GIVEN </td>";
		        echo "<td align='center' colsapn='2'> DATE STARTED </td>";
		        echo "</tr>";
		     
                echo "<tr>";
                
    		    echo "<td align='center' > ANTENATAL </td>";
    		    echo "<td>";
    		    echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='text' class='form-control' name='drug6'>";
                echo  "</div>";
                echo  "</td>"; 
                
                echo "<td>";
                echo "<div class='col-md-12'>";
                echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='date' class='form-control' name='date6'>";
                echo  "</div>";
                echo  "</div>";
                echo"</td>";
                
                echo "<td style='visibility:hidden'>";
                echo  "<input type='number' class='form-control'  name='p_Id' value=" . $_GET['P_ID'] . ">";
                echo "</td>";
                
    		    echo "</tr>";
    		    
		        echo "<tr>";
    		    echo "<td align='center' > LABOUR AND DELIVERY</td>";
    		    echo "<td>";
    		    echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='text' class='form-control' name='drug7'>";
                echo  "</div>";
                echo  "</td>"; 
                
                echo "<td>";
                echo "<div class='col-md-12'>";
                echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='date' class='form-control' name='date7'>";
                echo  "</div>";
                echo "</select>";
                echo"</td>";
                echo "<td style='visibility:hidden'>";
                echo  "<input type='number' class='form-control'  name='p_Id' value=" . $_GET['P_ID'] . ">";
                echo "</td>";
                
                
    		    echo "</tr>";
    		    
		        echo "<tr>";
    		    echo "<td align='center' > BABY </td>";   
    		    echo "<td>";
    		    echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='text' class='form-control' name='drug8'>";
                echo  "</div>";
                echo  "</td>"; 
                
                echo "<td>";
                echo "<div class='col-md-12'>";
                echo "<div class='form-group'>";
                echo  "<label class='bmd-label-floating'></label>";
                echo  "<input type='date' class='form-control' name='date8'>";
                echo  "</div>";
                echo "</select>";
                echo"</td>";
                echo "<td style='visibility:hidden'>";
                echo  "<input type='number' class='form-control'  name='p_Id' value=" . $_GET['P_ID'] . ">";
                echo "</td>";
                
                echo "</thead>";
                
                       
		        echo "</table>";
		        echo "</div>";
                echo "<button type='submit' class='btn btn-primary pull-right' name='updPmtct' >Update Patient'S PMTCT </button>";
                    
                echo "<div class='clearfix'></div>";
		             
echo "</form>";

		    }

	}
	         
                
            ?>
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
                
               if (isset($_POST['update']))
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

    <?php
	            $date6="";
                $date7="";
                $date8="";
                $drug6="";
                $drug7="";
                $drug8="";
                $p_id="";
                
               if (isset($_POST['updPmtct']))
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
      $stmt1->bind_param("ssi", $drug6, $date6, $p_id); //s means DBMS expect string datatype
      
      $stmt2->bind_param("ssi", $drug7, $date7, $p_id ); //s means DBMS expect string datatype
      
      $stmt3->bind_param("ssi", $drug8, $date8, $p_id); //s means DBMS expect string datatype
      
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
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
