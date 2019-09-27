
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
</head>

<body class="">
    <?php include("header.php"); ?>
      <!-- End Navbar -->
      <div class="content">
          <div class="row">
              <div class="col-md-6">
                  <div class="card card-chart">
                      <div class="card-header card-header-success">
                          <div class="ct-chart" id="successfulDelivery"></div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Successful Deliveries</h4>
                          <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i>  <?php
                        //connect to db
                        $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');
                        $size = "SELECT *, COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Success'";

                        $results = mysqli_query($connect, $size);
                        $values= mysqli_fetch_assoc($results);
                        $num_rows=$values['count'];

                        echo $num_rows;

                        ?>

                    </span> increase in today visits.</p>
                          <a href="successfulPreg.php">View</a>
                      </div>
                      <div class="card-footer">
                          <div class="" id="">
                              <i class="material-icons">access_time</i> updated 4 minutes ago
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="card card-chart">
                      <div class="card-header card-header-warning">
                          <div class="ct-chart" id="losses"></div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Total Losses</h4>
                          <p class="card-category">Yearly stats</p>
                          <?php
                          //connect to db
                         $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');
                          $size = "SELECT *, COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure'";

                          $results = mysqli_query($connect, $size);
                          $values= mysqli_fetch_assoc($results);
                          $num_rows=$values['count'];

                          echo $num_rows;

                          ?>
                          <a href="failurePreg.php">View</a>
                      </div>
                      <div class="card-footer">
                          <div class="" id="">
                              <i class="material-icons">access_time</i> updated 2 days ago

                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-chart">
                      <div class="card-header card-header-info">
                          <div class="ct-chart" id="completedTasksChart"></div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Failure Categories</h4>
                          <label type="button" class="btn btn-sm btn-danger">Miscarriage
                          </label>
                          <label type="button" class="btn btn-sm btn-light">Still Birth
                          </label>
                           <label type="button" class="btn btn-sm btn-warning">Molar Pregnacy
                          </label>
                          <label type="button" class="btn btn-sm" style="background-color: #a77516 ;">Medical Reasons
                          </label>
                          <p class="card-category">rate by people</p>
                          <a href="failurePreg.php">View</a>
                      </div>
                      <div class="card-footer">
                          <div class="stats">
                              <i class="material-icons">access_time</i> updated 2 days ago

                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col col-md-12">
                  <div class="card card-chart">
                      <div class="card-header">
                          <div class="age-chart" id="completedTasksChart"></div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Age Group Statistics</h4>
                          <label type="button" class="btn btn-sm" style="background-color: yellow; color: black">Teenagers
                          </label>
                          <label type="button" class="btn btn-sm " style="background-color: red">Youth
                          </label>
                          <label type="button" class="btn btn-sm " style="background-color: orangered">Adults
                          </label>
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
  </div>-->
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="application/javascript">
        $(document).ready(function () {
            let options = {
                seriesBarDistance: 1000
            };
            let responsiveOptions = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];

            load_failure_history(options,responsiveOptions);
            load_success_history(options,responsiveOptions);
            load_miscarriage_history(options,responsiveOptions);
            load_still_born_history(options,responsiveOptions);
            age_statistics();


            function mapCoordinates(x) {
                let labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                let series = [0,0,0,0,0,0,0,0,0,0,0,0];

                for (let i =0; i<x.length; i++){
                    let stats = x[i].split(' ');
                    for (let j=0; j<labels.length; j++){
                        if(stats[1] != null){
                            let key = stats[0].substring(0,3);
                            let value = stats[1].substring(1,2);
                            console.log(" key ==> "+key+" value ==>"+value);
                            if(key == labels[j]){
                                series[j] = value;
                            }
                        }
                    }
                }
                let data = {
                    labels: labels,
                    series: [series]
                };
                return data;
            }
            function mapSeries(x) {
                let labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                let series = [0,0,0,0,0,0,0,0,0,0,0,0];

                for (let i =0; i<x.length; i++){
                    let stats = x[i].split(' ');
                    for (let j=0; j<labels.length; j++){
                        if(stats[1] != null){
                            let key = stats[0].substring(0,3);
                            let value = stats[1].substring(1,2);
                            console.log(" key ==> "+key+" value ==>"+value);
                            if(key == labels[j]){
                                series[j] = value;
                            }
                        }
                    }
                }
                return series;
            }
            function load_failure_history(options,responsiveOptions){
                $.post("getHistory.php",
                    {
                        'history': 'failure'
                    },
                    function(results){
                        var x = results.split('\n');
                        new Chartist.Bar('#losses', mapCoordinates(x), options, responsiveOptions);
                    });
            }
            
            function load_success_history(options, responsiveOptions) {
                $.post("getHistory.php",
                    {
                        'history': 'success'
                    },
                    function(results){
                        let x = results.split('\n');
                        new Chartist.Bar('#successfulDelivery', mapCoordinates(x), options, responsiveOptions);
                    });
            }
            
            function load_miscarriage_history(options,responsiveOptions) {
                let labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                let msx = [];
                let msx2 = [];
                let msx3 = [];
                let msx4 = [];
                
                $.post("getHistory.php",
                    {
                        'history': 'miscarriage'
                    },
                    function(results){
                        msx = results.split('\n');
                     
                        $.post("getHistory.php", {
                                'history': 'still_born_baby'
                            }, function (success) {
                                msx2 = success.split('\n');

                           $.post("getHistory.php", {
                                'history': 'molar_pregnancy'
                            }, function (success) {
                                msx3 = success.split('\n');
                                
                            $.post("getHistory.php", {
                                'history': 'medical_reasons'
                            }, function (success) {
                                msx4 = success.split('\n');
                                //console.log("medical reasons list");
                                console.log("medical reasons list"+msx4.toString());

                            let data = {
                                labels: labels,
                                series: [
                                    mapSeries(msx),
                                    mapSeries(msx2),
                                    mapSeries(msx3),
                                    mapSeries(msx4)
                                ]
                            };
                            new Chartist.Bar('#completedTasksChart', data, options, responsiveOptions);
                        });
                        });
                        });

                    });
            }

            function load_still_born_history(options,responsiveOptions) {
                $.post("getHistory.php",
                    {
                        'history': 'still_born_baby'
                    },
                    function (results) {
                        let x = results.split('\n');
                        new Chartist.Bar('completedTasksChart', mapCoordinates(x), options, responsiveOptions);
                });
            }

            //Todo
            function age_statistics() {

                $.post("getHistory.php",
                    {
                   'history': 'age_statistics'
                    },
                    function (success) {
                        let d = new Date().getFullYear();
                        d = d.toString();
                        let results = success.split('\n');
                        let teenages = 0;
                        let youth = 0;
                        let adults = 0;
                        for (let i =0; i<results.length; i++){
                            if (results[i] != null && results[i] != [] ){
                                let stats = results[i].split(' ');
                                let age = stats[0];

                                let value = stats[1].replace("(",'');
                                value = value.replace(")","");
                                let age_diff = parseInt(d) - parseInt(age);
                                   if(age_diff >12 && age_diff <= 19)
                                       teenages += parseInt(value);
                                   else if (age_diff >19 && age_diff <= 39)
                                       youth += parseInt(value);
                                   else if (age_diff >39 && age_diff <= 45)
                                       adults += parseInt(value);
                            }
                            // console.log("teenages "+teenages+" youth => "+youth+' adults'+adults);
                            var data = {
                                series: [teenages, youth, adults]
                            };

                            var sum = function(a, b) { return a + b };

                            new Chartist.Pie('.age-chart', data, {
                                width: 800,
                                labelInterpolationFnc: function(value) {
                                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                                }
                            });
                        }
                    // console.log(results.toString());
                });
            }

        });






    </script>
  
<?php
        $dr_id="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$dr_id=$_POST['dr_id'];
			$password=$_POST['password'];
  
     
  }

            $conn = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');
            
            
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
