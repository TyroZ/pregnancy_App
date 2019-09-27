<?php

$servername = "localhost";
$username = "id9752012_pregnancybw";
$password = "pregnancybw";
$dbname = "id9752012_pregnancybw";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>