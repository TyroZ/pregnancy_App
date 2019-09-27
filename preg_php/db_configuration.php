<?php
define('DB_USER', "id9752012_pregnancybw");
define('DB_PASSWORD', "pregnancybw");
define('DB_DATABASE', "id9752012_pregnancybw");
define('DB_SERVER', "localhost");
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>