<?php
/**
 * Created by PhpStorm.
 * User: MrOBJeremiah
 * Date: 1/13/2017
 * Time: 9:08 PM
 */
$id = $_GET['id'];

require_once('config.php');

$sql = "SELECT * FROM user_images WHERE id=$id";
$r = mysqli_query($con,$sql);

$result = array();

while ($row = mysqli_fetch_array($r)){
    array_push($result,array(
        "id"=>$row['id'],
        "username"=>$row['username'],
        "link"=>$row['link']

    ));}

echo json_encode(array('result'=>$result));

mysqli_close($con);