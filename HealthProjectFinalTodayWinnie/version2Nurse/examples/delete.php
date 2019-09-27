<?php
    
    $connect = mysqli_connect("localhost","id9752012_pregnancybw","pregnancybw","id9752012_pregnancybw");
   
    $delete_id=$_GET['P_ID'];
    
    $del = mysqli_query($connect, "DELETE FROM PATIENT WHERE P_ID = '$delete_id' ");
    header("location: patients.php");
?>