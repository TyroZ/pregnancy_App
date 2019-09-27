<?php
/**
 * Created by PhpStorm.
 * User: MrOBJeremiah
 * Date: 1/1/2017
 * Time: 5:19 PM
 */
define('HOST','localhost');
define('USER','id9752012_pregnancybw');
define('PASS','pregnancybw');
define('DB','id9752012_pregnancybw');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');