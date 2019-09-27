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
  <div class="wrapper ">
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