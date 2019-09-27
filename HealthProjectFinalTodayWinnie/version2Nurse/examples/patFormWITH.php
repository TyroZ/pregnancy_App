<?php echo " <form  method='post' enctype='multipart/form-data' action='ManyForms.php' > ";
		            echo "<h5 style='font-weight:bold'> MENSTRUAL HISTORY</h5>";  
		            
        		    
                     echo " <div class='row'> ";
                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating' style='font-weight: bolder'> USUAL_CYCLE </label> ";
                    echo "   <input type='text' class='form-control' name='usualCycle' placeholder=" . $row['USUAL_CYCLE'] . "> ";
                    echo "   </div> ";
                    echo "</div>";
                    echo " <div class='col-md-4'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating' style='font-weight: bolder'> UNCERTAIN_DATES</label> ";
                    echo "   <input type='date' class='form-control' name='uncertainDates' placeholder=" . $row['UNCERTAIN_DATES'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div>";
                    echo "</div>";

		            echo "<h5 style='font-weight:bold'> FAMILY PLANNING</h5>";  
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating' style='font-weight: bolder'> HAS_PRACTICED </label> ";
                    echo "   <input type='text' class='form-control' name='hasPracticed' placeholder=" . $row['HAS_PRACTICED'] . "> ";
                    echo "   </div> ";
                    echo " </div> ";
                     
                    echo " <div class='col-md-6'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating' style='font-weight: bolder'> METHOD_USED</label> ";
                    echo "   <input type='text' class='form-control' name='methodUsed' placeholder=" . $row['METHOD_USED'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div> ";
                     
                     
                    echo " <div class='row'> ";

                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>DATE_STOPED</label> ";
                    echo "<input type='date' class='form-control' name='datestoped' placeholder=" . $row['DATE_STOPED']. ">";
                    echo "   </div>";
                    echo " </div>";

                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "    <label class='bmd-label-floating'>REASONS_FOR_STOPPING</label>";
                    echo "  <input type='text' class='form-control' name='reasonsForStoping' placeholder=" . $row['REASONS_FOR_STOPPING'].">";
                    echo "  </div>";
                    echo "  </div>";
                    echo " </div>";

                    echo " <div class='row'>";
                    echo "   <div class='col-md-6'>";
                    echo "     <div class='form-group'>";
                    echo "       <label class='bmd-label-floating'>AFTER DELIVERY</label>";
                    echo "       <input type='text' class='form-control' name='wantFbAfterDelivery' placeholder=" . $row['WANT_FB_AFTER_DELIVERY'] . ">";
                    echo "     </div>";
                    echo "   </div>";
                   
                    echo "   <div class='col-md-6'>";
                    echo "     <div class='form-group'>";
                    echo "       <label class='bmd-label-floating'>METHOD_PREFERRED</label>";
                    echo " <input type='text' class='form-control' name='methodPreferred' placeholder=" . $row['METHOD_PREFERRED'] . "> ";
                    echo "   </div>";
                    echo "   </div>";
                    echo "   </div>";
                    
                    echo "<h5 style='font-weight: bold'>FAMILY HISTORY";  
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'> DISEASE </label> ";
                    echo "   <input type='text' class='form-control' name='disease' placeholder=" . $row['DISEASE'] . "> ";
                    echo "   </div> ";
                    echo " </div> ";
		                
		            echo " <div class='card-body'>";
                    echo "<div class='table-responsive'  style='overflow: hidden;'>  ";
                               
		            echo "<h5 style='font-weight:bold'> MEDICAL_HISTORY</h5>";  
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'> DISEASE </label> ";
                    echo "   <input type='text' class='form-control' name='disease2' placeholder=" . $row['DISEASE'] . "> ";
                    echo "</div>";
                    echo " </div> ";
                     
                    echo " <div class='col-md-6'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating'> ON_TREATMENT</label> ";
                    echo "   <input type='text' class='form-control' name='onTreatment' placeholder=" . $row['ON_TREATMENT'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div> ";

                    echo " <div class='row'> ";
                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>ALLERGIES</label> ";
                    echo "    <input type='text' class='form-control' name='allergies' placeholder=" . $row['ALLERGIES']. ">";
                    echo "   </div>";
                    echo " </div>";

                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "    <label class='bmd-label-floating'>DETAILS</label>";
                    echo "  <input type='text' class='form-control' name='details' placeholder=" . $row['DETAILS'].">";
                    echo "  </div>";
                    echo "  </div>";

                    echo " </div>";

    
    	            echo "<h5 style='font-weight:bold'>GENERAL_EXAMINATION</h5>";  
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'>NON_PREGNANT_WEIGHT </label> ";
                    echo "   <input type='text' class='form-control' name='nonPregnantWeight' placeholder=" . $row['NON_PREGNANT_WEIGHT'] . "> ";
                    echo "</div> ";
                    echo " </div> ";
                     
                    echo " <div class='col-md-6'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating'> PALLOR</label> ";
                    echo "   <input type='text' class='form-control' name='pallor' placeholder=" . $row['PALLOR'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div>";


                    echo " <div class='row'> ";
                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>OEDEMA</label> ";
                    echo "    <input type='text' class='form-control' name='oedema' placeholder=" . $row['OEDEMA']. ">";
                    echo "   </div>";
                    echo " </div>";

                    echo " <div class='col-md-6'>";
                    echo "  <div class='form-group'>";
                    echo "    <label class='bmd-label-floating'>FINGERS</label>";
                    echo "  <input type='text' class='form-control' name='fingers' placeholder=" . $row['FINGERS'].">";
                    echo "  </div>";
                    echo "  </div>";
                    echo " </div>";

                     
                    echo " <div class='row'> ";

                    echo "<div class='col-md-6'>";
                    echo "<div class='form-group'>";
                    echo "<label class='bmd-label-floating'>NAILS</label>";
                    echo "<input type='text' class='form-control' name='nails' placeholder=" . $row['NAILS'] . ">";
                    echo "</div>";
                    echo "</div>";
                   
                    echo "<div class='col-md-6'>";
                    echo "<div class='form-group'>";
                    echo "<label class='bmd-label-floating'>NUTRITONAL_STATUS</label>";
                    echo "<input type='text' class='form-control' name='nutritionalStatus' placeholder=" . $row['NUTRITONAL_STATUS'] . "> ";
                    echo "</div>";
                    echo "</div>";

                    echo "</div>";
                   
                   
                    echo " <div class='row'> ";

                    echo " <div class='col-md-6'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'> BREASTS </label>";
                    echo " <input type='text' class='form-control' name='breasts' placeholder=" . $row['BREASTS'] . "> ";
                    echo " </div>";
                    echo " </div>";
                   
                    
                    echo " <div class='col-md-6'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>THYROID</label>";
                    echo " <input type='text' class='form-control' name='thyroid' placeholder=" . $row['THYROID'] . "> ";
                    echo " </div> ";
                    echo " </div> ";

                    echo " </div> ";

                    echo " <div class='row'> ";

                    echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>HEART_SOUNDS</label>";
                    echo " <input type='text' class='form-control' name='heartSounds' placeholder=" . $row['HEART_SOUNDS'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    
                    
                     echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>MURMURS</label>";
                    echo " <input type='text' class='form-control' name='murmurs' placeholder=" . $row['MURMURS'] . "> ";
                    echo " </div> ";
                    echo " </div> ";

                    echo " </div> ";
                    
                    echo " <div class='row'> ";
                      echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>CHEST_SOUND</label>";
                    echo " <input type='text' class='form-control' name='chestSound' placeholder=" . $row['CHEST_SOUND'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    
                    
                      echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>VARICOSE_VEINS</label>";
                    echo " <input type='text' class='form-control' name='varicoseVeins' placeholder=" . $row['VARICOSE_VEINS'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    
                    
                      echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'>HEMORRHOIDS</label>";
                    echo " <input type='text' class='form-control' name='hemorrhoids' placeholder=" . $row['HEMORRHOIDS'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    echo " </div> ";
                  
                    
                   echo " <div class='card-body'>";
                 echo "<table class='table-responsive' style='width: 100%; overflow: hidden;'> ";
                    
		            echo "<h5 style='font-weight:bold'> ABDOMINAL EXAMINATION</h5>"; 
		        
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'> SPLEEN </label> ";
                    echo "   <input type='text' class='form-control' name='fSpleen' placeholder=" . $row['SPLEEN'] . "> ";
                    echo "   </div> ";
                    echo " </div> ";
                     
                    echo " <div class='col-md-3'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating'> LIVER</label> ";
                    echo "   <input type='text' class='form-control' name='liver' placeholder=" . $row['LIVER'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                     
                     
                    echo " <div class='col-md-3'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>KIDNEY</label> ";
                    echo "    <input type='text' class='form-control' name='kidney' placeholder=" . $row['KIDNEY']. ">";
                    echo "   </div>";
                    echo " </div>";
                    echo " </div>";
                     
                    
                    
                    
                    echo "<table class='table-responsive' style='overflow: hidden'>";
		            echo "<h5 style='font-weight:bold'> PELVIC_EXAMINATION</h5>";  
		            
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'> VULVA </label> ";
                    echo "   <input type='text' class='form-control' name='vulva' placeholder=" . $row['VULVA'] . "> ";
                    echo "   </div> ";
                    echo " </div> ";
                     
                    echo " <div class='col-md-3'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating'>VAGINA</label> ";
                    echo "   <input type='text' class='form-control' name='vagina' placeholder=" . $row['VAGINA'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                     
                     
                    echo " <div class='col-md-3'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>NATIONAL ID</label> ";
                    echo "    <input type='number' class='form-control' name='natID' placeholder=" . $row['P_ID']. ">";
                    echo "   </div>";
                    echo " </div>";
                    echo " </div>";
                     
                     
                    echo " <div class='row'> ";
                    echo " <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "    <label class='bmd-label-floating'>CERVIX</label>";
                    echo "  <input type='text' class='form-control' name='cervix' placeholder=" . $row['CERVIX'].">";
                    echo "  </div>";
                    echo "  </div>";
                  
                    echo "   <div class='col-md-3'>";
                    echo "     <div class='form-group'>";
                    echo "       <label class='bmd-label-floating'>UTERINE_SIZE</label>";
                    echo "       <input type='text' class='form-control' name='uterineSize' placeholder=" . $row['UTERINE_SIZE'] . ">";
                    echo "     </div>";
                    echo "   </div>";
                   
                    echo "   <div class='col-md-3'>";
                    echo "     <div class='form-group'>";
                    echo "       <label class='bmd-label-floating'>ADNEXAE</label>";
                    echo " <input type='text' class='form-control' name='adnexae' placeholder=" . $row['ADNEXAE'] . "> ";
                    echo "   </div ";
                    echo "   </div>";
                    echo "   </div>";
                    echo "   </div>";
                   
                   
                    echo " <div class='row'> ";
                    echo " <div class='col-md-5'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'> ABNORMALITIES </label>";
                    echo "<input type='text' class='form-control' name='abnormalities' placeholder=" . $row['ABNORMALITIES'] . "> ";
                    echo " </div>";
                    echo " </div>";

                    
                    echo " <div class='col-md-3'>";
                    echo " <div class='form-group'>";
                    echo " <label class='bmd-label-floating'> SCAN_BEFORE_20_WEEKS</label>";
                    echo "<input type='text' class='form-control' name='scanBefore20Weeks' placeholder=" . $row['SCAN_BEFORE_20_WEEKS'] . "> ";
                    echo " </div> ";
                    echo " </div> ";
                    
                    
                    echo "<div class='col-md-3'>";
                    echo "<div class='form-group'>";
                    echo "<label class='bmd-label-floating'>RESULTS</label>";
                    echo "<input type='text' class='form-control' name='results20' placeholder=" . $row['RESULTS'] . ">";
                    echo "     </div>";
                    echo "   </div>";

                    echo " </div> ";
                    
                    
                     
                    echo "   <div style='visibility:hidden' class='col-md-3'>";
                    echo "     <div class='form-group'>";
                    echo "       <label class='bmd-label-floating'>P_ID</label>";
                    echo "       <input type='number' class='form-control' name='pId' placeholder=" . $row['P_ID'] . ">";
                    echo "     </div>";
                    echo "   </div>";

                    echo "<button type='submit' class='btn btn-primary pull-right' >Update Patient'S PMTCT </button>";

                    echo "</form>";
                    
                    ?>
		     
		     
		     