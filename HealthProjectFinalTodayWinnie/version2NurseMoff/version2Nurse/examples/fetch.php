<?php
$connect = mysqli_connect("localhost","root","","pregnancybw");

if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['query']))
{
    if ($connect)
    {
        if(($_POST["view"] == 'yes'))
        {
            $update_query = "UPDATE emergency SET view = 1 WHERE view=0 ";
            mysqli_query($connect, $update_query);
        }

        $query = "SELECT * FROM emergency";
        $results = mysqli_query($connect, $query);
        $out = '';
         while($row = mysqli_fetch_array($results))
        {
           $out .= '<a class="dropdown-item" href="patientLocationMap.php?pid='.$row["P_ID"].'&latitude='.$row["LATITUDE"].'&longitude='.$row["LONGITUDE"].'">'.$row["NAME"].'</a>';
        }
        echo $out;
    }else{
        echo "Database not connected";
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['query']))
{
    if ($connect)
    {
        if(($_POST["view"] == 'yes'))
        {
            $update_query = "UPDATE emergency SET view = 1 WHERE view=0 ";
            mysqli_query($connect, $update_query);
        }
        $status_query = "SELECT * FROM emergency WHERE view=0";
        $result_query = mysqli_query($connect, $status_query);
        $count = mysqli_num_rows($result_query);

        echo $count;
    }else{
        echo 0;
    }
}


?>
