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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Pregancy App
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <i class="material-icons">person</i>
              <p>Register Patient</p>
            </a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="patients.php">
              <i class="material-icons">content_paste</i>
              <p>Patient List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pmtct.php">
              <i class="material-icons">library_books</i>
              <p>PMTCT Program</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="precious.php">
              <i class="material-icons">bubble_chart</i>
              <p>Precious Pregnancies</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <i class="material-icons">location_ons</i>
              <p>Map</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="appointments.php">
              <i class="material-icons">notifications</i>
              <p>Appointments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="reports.php">
              <i class="material-icons">language</i>
              <p>Reports</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">language</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Dokota Rice has an emergeny</a>
                  <a class="dropdown-item" href="#">You have 5 new patients</a>
                  <a class="dropdown-item" href="#">Update your profile</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
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
                  <div class="table-responsive">
                        
                         
<?php
	//connect to db
	$connect = mysqli_connect("localhost","id9752012_pregnancybw","pregnancybw","id9752012_pregnancybw");

			
	if(isset($_GET['pid'])) {
        $txt= $_GET['pid'];
		$result = mysqli_query($connect,"SELECT * FROM PATIENT where P_ID=" . $txt); 
		
		    if(mysqli_num_rows($result) >= 1){
                
                
               echo " <div>"; 
            echo "<div class='table-responsive'>";     
		     echo "<table class='table'>";
		     echo "<thead class='text-primary'>";
		    
            
            $i = 1;
		        while($row = mysqli_fetch_array($result)){
		    echo "<tbody>";        
		    echo "<tr id>";
		    echo " <form  method='post' enctype='multipart/form-data' action='updatePat.php' enctype='multipart/form-data '> ";
		    echo " GENERAL INFORMATION";     
                   echo " <div class='row'> ";
                      echo "  <div class='col-md-5'>";
                      echo "  <div class='form-group'>";
                       echo "   <label class='bmd-label-floating'>" . $row['FIRSTNAME'] . "</label> ";
                       echo "   <input type='number' class='form-control' name='pID'> ";
                     echo "   </div> ";
                     echo " </div> ";
                     echo " <div class='col-md-5'> ";
                      echo "  <div class='form-group'> ";
                       echo "   <label class='bmd-label-floating'>" . $row['MOBILE'] . "</label> ";
                       echo "   <input type='text' class='form-control' name='occupacy'> ";
                       echo " </div> ";
                     echo " </div> ";
                     echo " <div class='col-md-3'>";
                      echo "  <div class='form-group'> ";
                      echo "    <label class='bmd-label-floating'><a href='healthprofile.php?P_ID=" . $i . " '> " . $row['P_ID']. " </a></label> ";
                      echo "    <input type='number' class='form-control' name='natID'>";
                     echo "   </div>";
                     echo " </div>";
                     echo " <div class='col-md-4'>";
                      echo "  <div class='form-group'>";
                      echo "    <label class='bmd-label-floating'>" . $row['EMAIL'] . "</label>";
                      echo "    <input type='email' class='form-control' name='email'>";
                      echo "  </div>";
                    echo "  </div>";
                   echo " </div>";
                   echo " <div class='row'>";
                   echo "   <div class='col-md-6'>";
                   echo "     <div class='form-group'>";
                   echo "       <label class='bmd-label-floating'>" . $row['DOB'] . "</label>";
                   echo "       <input type='text' class='form-control' name='fName'>";
                   echo "     </div>";
                   echo "   </div>";
                   echo "   <div class='col-md-6'>";
                   echo "     <div class='form-group'>";
                   echo "       <label class='bmd-label-floating'>" . $row['PLACEOFWORK'] . "</label>";
                    echo "      <input type='text' class='form-control' name='lName'> ";
                   echo "     </div ";
                   echo "   </div>";
                   echo " </div>";
                   echo " <div class='row'>";
                   echo "   <div class='col-md-12'>";
                    echo "    <div class='form-group'>";
                    echo "      <label class='bmd-label-floating'>" . $row['DUE_DATE'] . "</label>";
                    echo "      <input type='text' class='form-control' name='address'> ";
                    echo "    </div> ";
                   echo "   </div> ";
                    
echo "</form>";
            echo "</tr>";
            echo "</tbody>";
            
            $i++;
		        }
		        echo "</table>";
                    echo "<button type='submit' class='btn btn-primary pull-right' >Update Patient'S PMTCT </button>";
                    
                    echo "<div class='clearfix'></div>";
		        // Close result set
		        mysqli_free_result($result);
		    } else{
		        echo "No records matching your query were found.";
		    }

	}

                if(isset($_GET['delete']))
                {
                    $delete_id=$_GET['delete'];
                    
                    mysqli_query($connect, "DELETE FROM PATIENTS WHERE P_ID = ' $delete_id'");
                }
                
             
                
                
                if(isset($_GET['P_ID'])) {
        $txt= $_GET['P_ID'];
		$result1 = mysqli_query($connect,"SELECT * FROM PRE_TEST_EDUCATION_COUNSELING where P_ID=" . $txt); 
		$result2 = mysqli_query($connect,"SELECT * FROM HIV_TESTING where P_ID=" . $txt);  
		$result3 = mysqli_query($connect,"SELECT * FROM POST_TEST_COUNSELLING where P_ID=" . $txt);
		$result4 = mysqli_query($connect,"SELECT * FROM CD_4_CELL_COUNT where P_ID=" . $txt); 
		$result5 = mysqli_query($connect,"SELECT * FROM INFANT_FEEDING_COUNSELLING where P_ID=" . $txt); 
		
		
		    if(mysqli_num_rows($result1) >= 1 && mysqli_num_rows($result2) >= 1 && mysqli_num_rows($result3) >= 1 && mysqli_num_rows($result4) >= 1 && mysqli_num_rows($result5) >= 1){
		        
		       
            echo "<div class='table-responsive'>";     
		     echo "<caption> HEALTH PROFILE</caption>"; 
		     echo "<caption> PMTCT </caption>"; 
		     
		     echo "<table border='1' cellpadding='0' cellspacing='0'>";
		     
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
		   
            
            $i++;
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > HIV Testing</td>";
		   while($row = mysqli_fetch_array($result2)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
            $i++;
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > Post Test/Counselling </td>";
		    while($row = mysqli_fetch_array($result3)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
            $i++;
		        }
		    echo "</tr>";
		    echo "<td align='center' > CD4 CellCount </td>";
		    while($row = mysqli_fetch_array($result4)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
            $i++;
		        }
		    echo "</tr>";
		     echo "<tr>";
		    echo "<td align='center' > Infant Feeding /Counselling </td>";
		    while($row = mysqli_fetch_array($result5)){      
		    echo "<td>" . $row['INITIAL_DATE_CONDUCTED'] . "</td>"; 
            echo "<td>" . $row['INITIAL_OUTCOME'] . "</td>";
            echo "<td>" . $row['RE_DATE_CONDUCTED'] . "</td>";
            echo "<td>" . $row['RE_OUTCOME'] . "</td>"; 
		   
            
            $i++;
		        }
		    echo "</tr>";
            echo "</thead>";
		    
		        echo "</table>";
		        
		        // Close result set
		        mysqli_free_result($result1);
		    } else{
		        
		    echo " <form  method='post' enctype='multipart/form-data'  enctype='multipart/form-data '> ";
		        echo "<div class='table-responsive'>";     
		     echo "<caption> HEALTH PROFILE</caption>"; 
		     echo "<caption> PMTCT </caption>"; 
		     
		     echo "<table border='1' cellpadding='0' cellspacing='0'  >";
		     
		     echo "<thead class='text-primary'>";
		    echo "<tr>";
		    echo "<td rowspan='2'> </td>";
		    echo "<td align='center' colspan='2'> INITIAL REGISTRATION </td>";
		    echo "<td align='center' colspan='3'> Re - Testing form 36 wkn of Gestation </td>";
		     echo "</tr>";
		     
            echo "<tr>";
		    echo "<td align='center' > Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
		    echo "<td align='center'> Date Conducted </td>";
		    echo "<td align='center'> Results/Outcome</td>";
		    
		    echo "<td align='center'> P_ID</td>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<div class='form-group'>";
            echo "<td name='p_id'>" . $txt . "</td>";
            echo  "</div>";
            
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
            echo "<div class='form-group'>";
            echo "<td name='p_id'>" . $txt . "</td>";
            echo  "</div>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<div class='form-group'>";
            echo "<td name='p_id'>" . $txt . "</td>";
            echo  "</div>"; 
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            echo "<div class='form-group'>";
            echo "<td name='p_id'>" . $txt . "</td>";
            echo  "</div>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
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
            echo "<option value='POSITIVE'>EXCELLENT</option>";
            echo "<option value='POSITIVE'>GOOD</option>";
            echo "<option value='NEGATIVE'>BAD</option>";
            echo  "</div>";
            echo "</select>";
            echo"</td>";
            
            echo "<div class='form-group'>";
            echo "<td name='p_id'>" . $txt . "</td>";
            echo  "</div>";
		    echo "</tr>";
            echo "</thead>";
            
                   
		        echo "</table>";
		        echo "</div>";
                    echo "<button type='submit' class='btn btn-primary pull-right' >Update Patient'S PMTCT </button>";
                    
                    echo "<div class='clearfix'></div>";
		             
echo "</form>";
		    }

	}
	          
                
            ?>
	        <?php
	            $p_id;
                $date1;
                $result1;
                $date11;
                $result11;
                $date2;
                $result2;
                $date22;
                $result22;
                $date3;
                $result3;
                $date33;
                $result33;
                $date4;
                $result4;
                $date44;
                $result44;
                $date5;
                $result5;
                $date55;
                $result55;
                
               if ($_SERVER["REQUEST_METHOD"] == "POST")
              {
                  $p_id =  $_POST["pid"];
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
      echo "ph ID is required";
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
	</div>
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
