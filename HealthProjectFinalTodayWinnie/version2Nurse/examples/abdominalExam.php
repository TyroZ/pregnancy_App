echo " <form  method='post' enctype='multipart/form-data' action='updatePat.php' enctype='multipart/form-data '> ";
		            echo " GENERAL INFORMATION";  
		            
                    echo " <div class='row'> ";
                    echo "  <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "   <label class='bmd-label-floating'> SPLEEN </label> ";
                    echo "   <input type='text' class='form-control' name='fSpleen' value=" . $row['SPLEEN'] . "> ";
                    echo "   </div> ";
                    echo " </div> ";
                     
                    echo " <div class='col-md-3'> ";
                    echo "  <div class='form-group'> ";
                    echo "   <label class='bmd-label-floating'> LIVER</label> ";
                    echo "   <input type='text' class='form-control' name='liver' value=" . $row['LIVER'] . ">";
                    echo " </div> ";
                    echo " </div> ";
                     
                     
                    echo " <div class='col-md-3'>";
                    echo "  <div class='form-group'> ";
                    echo "    <label class='bmd-label-floating'>KIDNEY</label> ";
                    echo "    <input type='number' class='form-control' name='kidney' value=" . $row['KIDNEY']. ">";
                    echo "   </div>";
                    echo " </div>";
                    echo " </div>";
                     
                     
                    echo " <div class='row'> ";
                    echo " <div class='col-md-5'>";
                    echo "  <div class='form-group'>";
                    echo "    <label class='bmd-label-floating'>P_ID</label>";
                    echo "  <input type='email' class='form-control' name='pid' value=" . $row['P_ID'].">";
                    echo "  </div>";
                    echo "  </div>";
                    
echo "</form>";