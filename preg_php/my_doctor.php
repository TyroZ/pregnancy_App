<?php
$host='127.0.0.1:3340';
$uname='id9752012_pregnancybw';
$pwd='pregnancybw';
$db='id9752012_pregnancybw';
$con = mysqli_connect($host,$uname,$pwd) or die("connection failed");
mysqli_select_db($con,$db) or die("db selection failed");

if($_GET['string1'])
{
$ia =$_GET['string1'];

$r=mysqli_query($con,"select * from patient_doctor where patient_email='$ia'");
while($row=mysqli_fetch_assoc($r))
{
$cls[]=$row;
//echo $fin."<br>";
}
echo json_encode($cls);
}
mysqli_close($con);

?>