    <?php       
echo "<div class='modal fade' id=".$row['P_ID']." tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
echo "  <div class='modal-dialog' role='document'>";
    echo " <div class='modal-content'>";
     
      echo " <div class='modal-header'>";
       echo "  <h5 class='modal-title' id='exampleModalLabel'>";
       
       
       echo "</h5>";
       echo "  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "   <span aria-hidden='true'>&times;</span>";
        echo " </button>";
     echo "  </div> ";
    echo "   <div class='modal-body'>";
echo " <form method='get' >";
        echo"<div class='form-group'>";
            
           // $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');    
               // $txt= $_GET['P_ID'];
                
            echo "<input name='pid' placeholder=".$row['P_ID']." value=".$row['P_ID']."> PID</input>";
        
         echo "  <div class='form-group'>";
        echo "   <select name='succFail' type='text' class='form-control' id='recipient-name' > ";
          echo "       <option value='' disabled selected>Choose Results</option> ";
           echo "      <option value='Success' >Success</option> ";
            echo "    <option value='Failure'>Failure</option> ";
         echo "  </select>";
         echo "  </div> ";
          echo " <div class='form-group'> ";
           echo "  <label for='message-text' class='col-form-label'>Type Of Failure:</label> ";
            echo " <select name='type' type='text' class='form-control' id='recipient-name' > ";
             echo "    <option value='__' >Type of Pregnancy Loss(Failure)</option> ";
             echo "    <option value='Still Birth'>Still Birth</option> ";
              echo "   <option value='Molar Pregnancy'>Molar Pregnancy</option> ";
               echo "  <option value='Termination For Medial Reasons'> Termination For Medial Reasons<option>";
              echo "   <option value='Miscarriage'>Miscarriage</option> ";
echo "  </select> "; 
         echo "  </div> ";
          echo " <div class='modal-footer'> ";
            echo " <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button> ";
           echo "  <button type='submit' class='btn btn-primary pull-right' >Save</button> ";
             
       echo "    </div> ";
        echo " </form> ";
     echo "  </div> ";
      
  echo "   </div>";
 echo "  </div> ";
echo " </div> ";
        
        ?>       
          