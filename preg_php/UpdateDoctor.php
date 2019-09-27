<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $id = $_POST['pd_id'];
 $D_name = $_POST['name'];
 $D_Phone = $_POST['phone'];
 $D_Email = $_POST['email'];

$Sql_Query = "UPDATE PATIENT_DOCTOR SET name= '$D_name', phone = '$D_Phone', email = '$D_Email' WHERE pd_id = $id";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Record Updated Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>