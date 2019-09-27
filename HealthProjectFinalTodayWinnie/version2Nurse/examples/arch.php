    
             
echo "<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
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
echo " <form method='get' action='modal.php'>";
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET['P_ID'])){
                $txt= $_GET['P_ID'];
        		$result = mysqli_query($connect,"SELECT P_ID FROM PATIENT where P_ID=" . $txt); 
        	 echo $txt;
        	 echo "<td><a href='patientProfileForm.php?P_ID='$txt''>  P_ID </a></td>"; 
            }
            }
        
         echo "  <div class='form-group'>";
        echo "   <select type='text' class='form-control' id='recipient-name' > ";
          echo "       <option value='' disabled selected>Choose Results</option> ";
           echo "      <option name='succFail'>Success</option> ";
            echo "    <option name='succFail'>Failure</option> ";
         echo "  </select>";
         echo "  </div> ";
          echo " <div class='form-group'> ";
           echo "  <label for='message-text' class='col-form-label'>Type Of Failure:</label> ";
            echo " <select type='text' class='form-control' id='recipient-name' > ";
             echo "    <option value='' disabled selected>Type of Pregnancy Loss(Failure)</option> ";
             echo "    <option name='type' value='Still Birth'>Still Birth</option> ";
              echo "   <option name='type' value='Molar Pregnancy'>Molar Pregnancy</option> ";
               echo "  <option name='type' value='Termination For Medial Reasons'> Termination For Medial Reasons<option>";
              echo "   <option name='type' value='Miscarriage'>Miscarriage</option> ";
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

        
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
     <div class='modal-dialog' role='document'>
     <div class='modal-content'>
         <div class='modal-header'>
           <h5 class='modal-title' id='exampleModalLabel'>
           </h5>
       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
        </button>
        </div> 
     <div class='modal-body'>
        <form method='get' action='modal.php'>
        <div class='form-group'>
            <?php
            
            if(isset($_GET['P_ID'])){
                $txt= $_GET['P_ID'];
        	 echo $txt;
        	 echo "<input name='pid' value='$txt'> $txt</input>"; 
            
            }?>
            <input name='pid' value='$txt'> PID</input>
            </div> 
         <div class='form-group'>
              <select type='text' class='form-control' id='recipient-name' > 
        <option value='' disabled selected>Choose Results</option> 
          <option name='succFail'>Success</option> 
           <option name='succFail'>Failure</option> 
            </select>
         </div> 
         <div class='form-group'> 
          <label for='message-text' class='col-form-label'>Type Of Failure:</label> 
           <select type='text' class='form-control' id='recipient-name' > 
            <option value='' disabled selected>Type of Pregnancy Loss(Failure)</option> 
             <option name='type' value='Still Birth'>Still Birth</option> 
             <option name='type' value='Molar Pregnancy'>Molar Pregnancy</option>
              <option name='type' value='Termination For Medial Reasons'> Termination For Medial Reasons<option>
                     <option name='type' value='Miscarriage'>Miscarriage</option> 
              </select> 
</div> 
         <div class='modal-footer'> 
          <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button> 
            <button type='submit' class='btn btn-primary pull-right' >Save</button> 
             
          </div> 
        </form> 
      </div> 
      
   </div>
  </div> 
</div> 
        
        
               
              