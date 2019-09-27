<?php
    session_start();
?>
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
    <?php 
		        if(isset($_SESSION['message'])){
		            echo "<div id='error_msg'>" . $_SESSION['message'] .  "</div>";
		            unset($_SESSION['message']);
		        }
		    ?>
  <div class="wrapper " style="background-image: url('images/background.PNG')">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Pregnancy App
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="register.php">
              <i class="material-icons">person</i>
              <p>Register Patient</p>
            </a>
          </li>
          <li class="nav-item ">
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
            <a class="nav-link" href="indexONE.php">
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
            
                    <form action="searchByPatId.php"  method="post" class="navbar-form">
                         <div class="input-group no-border">	
        			  <input id="patientID" class="form-control" type="text" name="patientID" placeholder="PatientID" >
        			  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
                </div>
        			</form>
        			
                    <form action="searchByHospital.php"  method="post" class="navbar-form">
                         <div class="input-group no-border">
        			  <input id="hospital" type="text" class="form-control" name="hospital" placeholder="Hospital" >
                        
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
              <li class="nav-item dropdown" id="dropdown_li">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification" id="emergency_num"></span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" id="notif_data">

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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">PMTCT Patients</p>
                  <h3 class="card-title"><?php
                        	//connect to db
                        	$connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');    
                                
                                
	                        	$size = "SELECT * , COUNT(P_ID) AS count FROM PATIENT WHERE STATUS='POSITIVE'";
                                
                    			$results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?>/<?php
                        	//connect to db
                        $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');    
                        
	                        	$size = "SELECT * , COUNT(P_ID) AS count FROM PATIENT";
                                
                    			$results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="pmtct.php">View all</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Due Patients</p>
                  <h3 class="card-title">
                      	<?php
                        	//connect to db
                        	$connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');    
                                
                            		$size = "SELECT *, CURDATE(), DATEDIFF(DUE_DATE, CURDATE())AS DAYS, DATEDIFF(DUE_DATE, CURDATE()) DIV 7 AS WEEKSLEFT, 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) AS CURRENT_WEEK ,COUNT(P_ID) AS count FROM PATIENT
                            WHERE 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) > 37 AND 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) < 44";
                                                            
                                $results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="dueDate.php"> Due Patients</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">3rd Trimester</p>
                  <h3 class="card-title">
                      	<?php
                        	//connect to db
                        $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');      
                                
                            		$size = "SELECT *, CURDATE(), DATEDIFF(DUE_DATE, CURDATE())AS DAYS, DATEDIFF(DUE_DATE, CURDATE()) DIV 7 AS WEEKSLEFT, 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) AS CURRENT_WEEK ,COUNT(P_ID) AS count FROM PATIENT
                            WHERE 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) > 26 AND 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) < 44";
                                                            
                                $results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="3rdTrimester.php">3rd Trimester</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">2nd Trimester</p>
                  <h3 class="card-title">
                      <?php
                        	//connect to db
                            $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');                                    
                            		$size = "SELECT *, CURDATE(), DATEDIFF(DUE_DATE, CURDATE())AS DAYS, DATEDIFF(DUE_DATE, CURDATE()) DIV 7 AS WEEKSLEFT, 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) AS CURRENT_WEEK ,COUNT(P_ID) AS count FROM PATIENT
                            WHERE 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) < 27";
                                                            
                                $results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="2ndTrimester.php">2nd Trimester</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Emergencies</p>
                  <h3 class="card-title" id="num_emergencies"></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i><a href="#">View all</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-check-circle"></i>
                  </div>
                  <p class="card-category">New Patients</p>
                  <h3 class="card-title">+
<?php
                        	//connect to db
$connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');                                    	
                        	$sql = "SELECT *, CURDATE(), DATEDIFF(DUE_DATE, CURDATE())AS DAYS, DATEDIFF(DUE_DATE, CURDATE()) DIV 7 AS WEEKSLEFT, 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) AS CURRENT_WEEK,COUNT(P_ID) AS count FROM PATIENT
WHERE 40 - (DATEDIFF(DUE_DATE, CURDATE()) DIV 7) < 14 ";

                    			$results = mysqli_query($connect, $size);
                    			$values= mysqli_fetch_assoc($results);
                    			$num_rows=$values['count'];
                        		
                        		echo $num_rows;
                        		
                		?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="1stTrimester.php">1st Trimester</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Checkups</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today visits.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">PMTCT Outreach</h4>
                  <p class="card-category">Yearly stats</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Mis carraiges</h4>
                  <p class="card-category">rate by people</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 days ago
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
  
<?php
        $dr_id="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$dr_id=$_POST['dr_id'];
			$password=$_POST['password'];
  
     
  }

        	   $servername = "localhost";
               $username = "root";
               $pass = "";
               $dbname = "pregnancybw";
            
            
            $conn = mysqli_connect($servername, $username, $pass, $dbname);
            // Check connection

			if (!$conn)
			{
				die("Connection failed: " . mysqli_connect_error());
			}

			if($dr_id!=''&&$password!='')
			{
				$query="select * from DOCTOR where DR_ID ='".$dr_id."' and PASSWORD ='".$password."'";
				 $result=mysqli_query($conn,$query); 
				 if(!$result)
				   die("Query Failed: " .  mysqli_error($conn));
				else
				{
					 if(mysqli_num_rows($result)>0){
					     
					$_SESSION['dr_id']=$dr_id;
				}
				else
				{
					echo'You entered username or password is incorrect';
				}
			}
			}

    


?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="application/javascript">
    $(document).ready(function () {

        $('<audio id="chatAudio">' +
            '<source src="sound.ogg" type="audio/ogg">' +
            '</audio>').appendTo('body');

        setInterval(function(){
            load_last_notification();
        }, 500);

        function load_last_notification(){
            $.post("fetch.php",
                {
                    view: ''
                },
                function(data){

                    $("#notif_data").html(data)
                });
            $.post("fetch.php",
                {
                    view: '',
                    query: 'count'
                },
                function(data){
                    $("#emergency_num").html(data)
                    $("#num_emergencies").html(data)
                    if (data > 0)
                    {
                        $('#chatAudio')[0].play();
                    }

                });
        }
        $("#dropdown_li a").click(function () {
            $.post("fetch.php",
                {
                    view:'yes'
                },
                function(data){

                    $("#notif_data").html(data)
                });
            $.post("fetch.php",
                {
                    query: 'count',
                    view: 'yes'
                },
                function(data){
                    $("#emergency_num").html(data)
                    if (data > 0)
                    {
                        $('#chatAudio')[0].play();
                    }

                });
        });
    });
</script>
</body>

</html>
