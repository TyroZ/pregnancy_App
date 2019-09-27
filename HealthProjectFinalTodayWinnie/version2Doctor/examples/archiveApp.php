<?php
    
    $connect = mysqli_connect("localhost","id9752012_pregnancybw","pregnancybw","id9752012_pregnancybw");
   
    $archive = $_GET['P_ID'];
    
    $del = mysqli_query($connect, "INSERT INTO ARCHIVEAPPS SELECT * FROM APPOINTMENTS WHERE P_ID = '$archive' ");
    $delete_id=$_GET['P_ID'];
    
    $del = mysqli_query($connect, "DELETE FROM APPOINTMENTS WHERE P_ID = '$delete_id' ");
    header("location: patients.php");
?>