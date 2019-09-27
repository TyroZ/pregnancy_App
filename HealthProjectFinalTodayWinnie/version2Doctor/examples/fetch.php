<?php
$connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');  

if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['query']))
{
    if ($connect)
    {
        if(($_POST["view"] == 'yes'))
        {
            $update_query = "UPDATE EMERGENCY SET VIEW = 1 WHERE VIEW=0";
            $send = "UPDATE EMERGENCY SET VIEW = 1 WHERE VIEW=0";
            $delete = "UPDATE EMERGENCY SET VIEW = 1 WHERE VIEW=0";
            $send = mysqli_query($connect, "INSERT INTO EMERGENCY_HISTORY SELECT * FROM EMERGENCY WHERE VIEW = 1 ");
            
    
           
            mysqli_query($connect, $update_query);
        }

        $query = "SELECT * FROM EMERGENCY";
        $results = mysqli_query($connect, $query);
        $out = '';
         while($row = mysqli_fetch_array($results))
        {
           $out .= '<a class="dropdown-item" href="indexEME.php?pid='.$row["P_ID"].'">'.$row["NAME"].'</a>';
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
            $update_query = "UPDATE EMERGENCY SET VIEW = 1 WHERE VIEW = 0 ";
            mysqli_query($connect, $update_query);
        }
        $status_query = "SELECT * FROM  EMERGENCY WHERE VIEW=0";
        $result_query = mysqli_query($connect, $status_query);
        $count = mysqli_num_rows($result_query);

        echo $count;
    }else{
        echo 0;
    }
}


?>
