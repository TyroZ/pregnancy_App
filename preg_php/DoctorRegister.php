<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $D_name = $_POST['name'];
 $D_Phone = $_POST['phone'];
 $D_Email = $_POST['email'];
 $P_Email = $_POST['patient_email'];

$Sql_Query = "INSERT INTO PATIENT_DOCTOR (name,phone,email,patient_email) values ('$D_name','$D_Phone','$D_Email','$P_Email')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Doctor Registered Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>