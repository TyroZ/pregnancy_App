<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $ID = $_POST['pd_id'];

$Sql_Query = "DELETE FROM PATIENT_DOCTOR WHERE pd_id = '$ID'";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Record Deleted Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>