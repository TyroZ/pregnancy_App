<html> 
<head> 
   <title>jQuery AJAX Example</title> 
</head>  
<body>
 <p><strong>Click on button to view users</strong></p> 
 <div id = "container" > 
 
<div id="records"></div> 
<p>
    <input type="button" id = "getusers" value = "Get Users" />
</p>
</div> 
<script src=”http://code.jquery.com/jquery-3.1.1.min.js”></script>
 
<script type=”text/javascript”> 
    $(function(){ $("#getusers").on(‘click’, function(){ 
      $.ajax({ method: "POST", url: "getrecords.php", })
    
        .done(function( data ) { 
          var result = $.parseJSON(data); 
          var string = '<table> 
               <tr>
                <th>#</th> 
                <th>Name</th> 
                <th>Email</th>
               <tr>';
 
       /* from result create a string of data and append to the div */
      
        $.each( result, function( key, value ) { 
             string += <tr> 
                    <td>”+value['id'] + "</td> 
                    <td> " +    value[‘first_name’]+' '+value['last_name']+'</td> 
                    <td> '+ value[’email’]+”</td> </tr>”; }); 
             string += '</table>'; 
 
          $("#records").html(string); 
       }); 
    }); 
}); 

$(function(){
}
</script> 
<?php 
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "dbusers";
$result_array = array();
/* Create connection */
$conn = new mysqli($host, $username, $password, $dbname);
/* Check connection  */
if ($conn->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}
/* SQL query to get results from database */
$sql = "SELECT id, first_name, last_name, email FROM users ";
$result = $conn->query($sql);
/* If there are results from database push to result array */
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}
/* send a JSON encded array to client */
echo json_encode($result_array);
$conn->close();
?>
</body>
</html>