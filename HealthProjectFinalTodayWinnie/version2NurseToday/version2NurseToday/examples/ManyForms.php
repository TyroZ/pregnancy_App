
<?php
	            $fSpleen="";
                $liver="";
                $kidney="";
                $pId="";
                $disease="";
                $hasPracticed="";
                $methodUsed="";
                $datestoped="";
                $reasonsForStoping="";
                $wantFbAfterDelivery="";
                $methodPreferred="";
                 $nonPregnantWeight="";
                $pallor="";
                $oedema="";
                $fingers="";
                $nails="";
                $nutritionalStatus="";
                $breasts="";
                $thyroid="";
                $heartSounds="";
                $murmurs="";
                $chestSound="";
                $varicoseVeins="";
                $hemorrhoids="";
                $onTreatment="";
                $allergies="";
                $desease2="";
                $details="";
                $usualCycle="";
                $uncertainDates="";
                
                
 $vulva="";
                $vagina="";
                $cervix="";
                $uterineSize="";
                $adnexae="";
                $abnormalities="";
                $scanBefore20Weeks="";
                $results20="";
                
                 
               if ($_SERVER["REQUEST_METHOD"] == "POST" )
              {
                  $fSpleen=$_POST["fSpleen"];
                $liver=$_POST["liver"];
                $kidney=$_POST["kidney"];
                $pId=$_POST["pId"];
                $disease=$_POST["disease"];
                $hasPracticed=$_POST["hasPracticed"];
                $methodUsed=$_POST["methodUsed"];
                $datestoped=$_POST["datestoped"];
                $reasonsForStoping=$_POST["reasonsForStoping"];
                $wantFbAfterDelivery=$_POST["wantFbAfterDelivery"];
                $methodPreferred=$_POST["methodPreferred"];
                  $nonPregnantWeight=$_POST["nonPregnantWeight"];
                $pallor=$_POST["pallor"];
                $oedema=$_POST["oedema"];
                $fingers=$_POST["fingers"];
                $nails=$_POST["nails"];
                $nutritionalStatus=$_POST["nutritionalStatus"];
                $breasts=$_POST["breasts"];
                $thyroid=$_POST["thyroid"];
                $heartSounds=$_POST["heartSounds"];
                $murmurs=$_POST["murmurs"];
                $chestSound=$_POST["chestSound"];
                $varicoseVeins=$_POST["varicoseVeins"];
                $hemorrhoids=$_POST["hemorrhoids"];
                $onTreatment=$_POST["onTreatment"];
                $allergies=$_POST["allergies"];
                $desease2=$_POST["disease2"];
                $details=$_POST["details"];
                $usualCycle=$_POST["usualCycle"];
                $uncertainDates=$_POST["uncertainDates"];
                $vulva=$_POST["vulva"];
                $vagina=$_POST["vagina"];
                $cervix=$_POST["cervix"];
                $uterineSize=$_POST["uterineSize"];
                $adnexae=$_POST["adnexae"];
                $abnormalities=$_POST["abnormalities"];
                $scanBefore20Weeks=$_POST["scanBefore20Weeks"];
                $results20=$_POST["results20"];
//Cleaning and sanitation of collected form data.
 
                
              
				 
                  $onTreatment = trim($onTreatment);
				  $onTreatment = stripslashes($onTreatment);
				  $onTreatment = htmlspecialchars($onTreatment);

				  $allergies = trim($allergies);
				  $allergies = stripslashes($allergies);
				  $allergies = htmlspecialchars($allergies);

				  $desease2 = trim($desease2);
				  $desease2 = stripslashes($desease2);
				  $desease2 = htmlspecialchars($desease2);
				  
				  
				  $details = trim($details);
				  $details = stripslashes($details);
				  $details = htmlspecialchars($details);
				  

				  $nonPregnantWeight = trim($nonPregnantWeight);
				  $nonPregnantWeight = stripslashes($nonPregnantWeight);
				  $nonPregnantWeight = htmlspecialchars($nonPregnantWeight);

                  $pallor = trim($pallor);
				  $pallor = stripslashes($pallor);
				  $pallor = htmlspecialchars($pallor);

				  $oedema = trim($oedema);
				  $oedema = stripslashes($oedema);
				  $oedema = htmlspecialchars($oedema);

				  $fingers = trim($fingers);
				  $fingers = stripslashes($fingers);
				  $fingers = htmlspecialchars($fingers);
				  
				  
				  $nails = trim($nails);
				  $nails = stripslashes($nails);
				  $nails = htmlspecialchars($nails);
				  
                   $nutritionalStatus = trim($nutritionalStatus);
				   $nutritionalStatus = stripslashes($nutritionalStatus);
				   $nutritionalStatus = htmlspecialchars($nutritionalStatus);
				  
                
                $breasts = trim($breasts);
				 $breasts = stripslashes($breasts);
				  $breasts = htmlspecialchars($breasts);
				  
                $thyroid = trim($thyroid);
				  $thyroid = stripslashes($thyroid);
				  $thyroid = htmlspecialchars($thyroid);
				  
                $heartSounds = trim($heartSounds);
				  $heartSounds = stripslashes($heartSounds);
				  $heartSounds = htmlspecialchars($heartSounds);
				  
                $murmurs = trim($murmurs);
				  $murmurs = stripslashes($murmurs);
				  $murmurs = htmlspecialchars($murmurs);
				  
                $chestSound = trim($chestSound);
				  $chestSound = stripslashes($chestSound);
				  $chestSound = htmlspecialchars($chestSound);
				  
                $varicoseVeins = trim($varicoseVeins);
				  $varicoseVeins = stripslashes($varicoseVeins);
				  $varicoseVeins = htmlspecialchars($varicoseVeins);
               
                $hemorrhoids = trim($hemorrhoids);
				  $hemorrhoids = stripslashes($hemorrhoids);
				  $hemorrhoids = htmlspecialchars($hemorrhoids);
                
				  $fSpleen = trim($fSpleen);
				  $fSpleen = stripslashes($fSpleen);
				  $fSpleen = htmlspecialchars($fSpleen);

                  $liver = trim($liver);
				  $liver = stripslashes($liver);
				  $liver = htmlspecialchars($liver);

				  $kidney = trim($kidney);
				  $kidney = stripslashes($kidney);
				  $kidney = htmlspecialchars($kidney);

				  $pId = trim($pId);
				  $pId = stripslashes($pId);
				  $pId = htmlspecialchars($pId);
				  
				  
				  $disease = trim($disease);
				  $disease = stripslashes($disease);
				  $disease = htmlspecialchars($disease);
				  
                   $hasPracticed = trim($hasPracticed);
				   $hasPracticed = stripslashes($hasPracticed);
				   $hasPracticed = htmlspecialchars($hasPracticed);
				  
                
                $methodUsed = trim($methodUsed);
				 $methodUsed = stripslashes($methodUsed);
				  $methodUsed = htmlspecialchars($methodUsed);
				  
                $datestoped = trim($datestoped);
				  $datestoped = stripslashes($datestoped);
				  $datestoped = htmlspecialchars($datestoped);
				  
                $reasonsForStoping = trim($reasonsForStoping);
				  $reasonsForStoping = stripslashes($reasonsForStoping);
				  $reasonsForStoping = htmlspecialchars($reasonsForStoping);
				  
                $wantFbAfterDelivery = trim($wantFbAfterDelivery);
				  $wantFbAfterDelivery = stripslashes($wantFbAfterDelivery);
				  $wantFbAfterDelivery = htmlspecialchars($wantFbAfterDelivery);
				  
                $methodPreferred = trim($methodPreferred);
				  $methodPreferred = stripslashes($methodPreferred);
				  $methodPreferred = htmlspecialchars($methodPreferred);
				  
				  $usualCycle = trim($usualCycle);
				  $usualCycle = stripslashes($usualCycle);
				  $usualCycle = htmlspecialchars($usualCycle);

				  $uncertainDates = trim($uncertainDates);
				  $uncertainDates = stripslashes($uncertainDates);
				  $uncertainDates = htmlspecialchars($uncertainDates);
    
                    $vulva = trim($vulva);
				  $vulva = stripslashes($vulva);
				  $vulva = htmlspecialchars($vulva);

                  $vagina = trim($vagina);
				  $vagina = stripslashes($vagina);
				  $vagina = htmlspecialchars($vagina);

				  $cervix = trim($cervix);
				  $cervix = stripslashes($cervix);
				  $cervix = htmlspecialchars($cervix);
				  
				  
				  $uterineSize = trim($uterineSize);
				  $uterineSize = stripslashes($uterineSize);
				  $uterineSize = htmlspecialchars($uterineSize);
				  
                   $adnexae = trim($adnexae);
				   $adnexae = stripslashes($adnexae);
				   $adnexae = htmlspecialchars($adnexae);
				  
                
                $abnormalities = trim($abnormalities);
				 $abnormalities = stripslashes($abnormalities);
				  $abnormalities = htmlspecialchars($abnormalities);
				  
                $scanBefore20Weeks = trim($scanBefore20Weeks);
				  $scanBefore20Weeks = stripslashes($scanBefore20Weeks);
				  $scanBefore20Weeks = htmlspecialchars($scanBefore20Weeks);
				  
                $results20 = trim($results20);
				  $results20 = stripslashes($results20);
				  $results20 = htmlspecialchars($results20);
				  
}

 
 if (empty($pId)) {
      echo "Patient ID is required";
      exit();
    }else{
 
       //Database connection credentials. Replace with your own details. 
       //Better to have these in a separate .php file, for reuse.
      $servername = "localhost";
      $username = "id9752012_pregnancybw";
      $pass = "pregnancybw";
      $dbname = "id9752012_pregnancybw";


      // Create connection
      $conn = new mysqli($servername, $username, $pass,$dbname );

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";


      //Create the prepared statement 
      
        
      $stmt1 = $conn->prepare("INSERT INTO MENSTRUAL_HISTORY (USUAL_CYCLE, UNCERTAIN_DATES, P_ID )VALUES (?,?,?)");
      
      $stmt2 = $conn->prepare("INSERT INTO FAMILY_PLANNING (HAS_PRACTICED, METHOD_USED, DATE_STOPED, REASONS_FOR_STOPPING, WANT_FB_AFTER_DELIVERY, METHOD_PREFERRED, P_ID)VALUES (?,?,?,?,?,?,?)");
    
      $stmt3 = $conn->prepare("INSERT INTO FAMILY_HISTORY (DISEASE, P_ID )VALUES (?,?)");
      
      
      $stmt4 = $conn->prepare("INSERT INTO MEDICAL_HISTORY (DISEASE, ON_TREATMENT, ALLERGIES, DETAILS, P_ID)VALUES (?,?,?,?,?)");
      
      
      $stmt5 = $conn->prepare("INSERT INTO GENERAL_EXAMINATION (NON_PREGNANT_WEIGHT, PALLOR, OEDEMA, FINGERS, NAILS,NUTRITONAL_STATUS, BREASTS, THYROID,HEART_SOUNDS, MURMURS, CHEST_SOUND, VARICOSE_VEINS, HEMORRHOIDS, P_ID )VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      
      $stmt6 = $conn->prepare("INSERT INTO ABDOMINAL_EXAMINATION (SPLEEN , LIVER, KIDNEY, P_ID )VALUES (?,?,?,?)");
      
      $stmt7 = $conn->prepare("INSERT INTO PELVIC_EXAMINATION (VULVA, VAGINA, CERVIX, UTERINE_SIZE, ADNEXAE, ABNORMALITIES, SCAN_BEFORE_20_WEEKS, RESULTS, P_ID) VALUE(?,?,?,?,?,?,?,?,?)");
      
      
      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.
      
      
      $stmt1->bind_param("ssi", $usualCycle,$uncertainDates, $pId); 
      
      $stmt2->bind_param("ssssssi", $hasPracticed, $methodUsed, $datestoped, $reasonsForStoping,$wantFbAfterDelivery,$methodPreferred,$pId); //s means DBMS expect string datatype
      
      $stmt3->bind_param("si", $disease, $pId ); //s means DBMS expect string datatype
      
       $stmt4->bind_param("ssssi", $desease2, $onTreatment, $allergies, $details, $pId); //s means DBMS expect string datatype
       
       $stmt5->bind_param("sssssssssssssi",$nonPregnantWeight, $pallor, $oedema, $fingers, $nails,  $nutritionalStatus, $breasts, $thyroid, $heartSounds,$murmurs,$chestSound,$varicoseVeins,$hemorrhoids,$pId); //s means DBMS expect string datatype
       
      $stmt6->bind_param("sssi", $fSpleen, $liver, $liver, $pId); //s means DBMS expect string datatype
      
      $stmt7->bind_param("ssssssssi",$vulva, $vagina,$cervix , $uterineSize, $adnexae, $abnormalities, $scanBefore20Weeks,  $results20, $pId); //s means DBMS expect string datatype
      
      
      //Bind datatypes of the above statement. The variables created here corresponds to the ?s above, and will 
      //be always waiting for the user  data.//s means DBMS expect string datatype
      
      $usualCycle = $usualCycle;
	  $uncertainDates = $uncertainDates;
      $onTreatment = $onTreatment;
	  $allergies = $allergies;
      $desease2= $desease2;
      $details=$details;
      $pallor = $pallor;
      $nonPregnantWeight = $nonPregnantWeight;
	  $oedema = $oedema;
      $fingers= $fingers;
      $nails=$nails;
      $nutritionalStatus=$nutritionalStatus;
      $breasts=$breasts;
      $thyroid=$thyroid;
      $heartSounds=$heartSounds;
      $murmurs=$murmurs;
      $chestSound=$chestSound;
      $varicoseVeins=$varicoseVeins;
      $hemorrhoids=$hemorrhoids;
      $liver = $liver;
      $fSpleen = $fSpleen;
	  $kidney = $kidney;
      $pId= $pId;
      $disease=$disease;
      $hasPracticed=$hasPracticed;
      $methodUsed=$methodUsed;
      $datestoped=$datestoped;
      $reasonsForStoping=$reasonsForStoping;
      $wantFbAfterDelivery=$wantFbAfterDelivery;
      $methodPreferred=$methodPreferred;
      $vagina = $vagina;
      $vulva = $vulva;
      $cervix= $cervix;
      $uterineSize=$uterineSize;
      $adnexae=$adnexae;
      $abnormalities=$abnormalities;
      $scanBefore20Weeks=$scanBefore20Weeks;
      $results20=$results20;
      
    //$stmt->execute(); will be enough to just insert the record, but to also get feedback on wherther it was successful or not, use as 
    //part of an if statement as below.
    if($stmt1->execute() && $stmt2->execute() && $stmt3->execute() && $stmt4->execute() &&$stmt5->execute() && $stmt6->execute() && $stmt7->execute())
      {

			echo("record inserted");
      }
    else {
			echo "Error inserting record: " . $stmt1->error;  //print any error messages 
    }

    $stmt1->close();

    }
    
    ?>