<?php
  $connect = mysqli_connect("localhost", 'id9752012_pregnancybw', 'pregnancybw','id9752012_pregnancybw');
  
if (!$connect) {
    return null;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['history'])) {

    $response = array();
    switch ($_POST['history']){

        case 'failure':
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure' GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;

        case "success":
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Success'  GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;

        case "miscarriage":
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure'  AND REASON='Miscarriage' GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;

        case "still_born_baby":
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure'  AND REASON='Still Birth' GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;
        
        case "molar_pregnancy":
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure'  AND REASON='Molar Pregnancy' GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;
        
        case "":
            $query = "SELECT DATE_FORMAT(CREATEDAT,'%M') as date_year,  COUNT(P_ID) AS count FROM PATIENT
                            WHERE ARCHIVE='Failure'  AND REASON='Termination For Medial Reasons' GROUP BY DATE_FORMAT(CREATEDAT,'%M')";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["date_year"], $row["count"]);
                $data[$row["date_year"]] = $row["count"];
            }
            $response = $data;
            break;

        case "age_statistics":
            $currentDateTime = date('Y-m-d');

            $query = "SELECT DATE_FORMAT(DOB,'%Y') AS dob, COUNT(DOB) AS count FROM PATIENT WHERE DOB IS NOT NULL GROUP BY DATE_FORMAT(DOB,'%Y') ORDER BY DATE_FORMAT(DOB,'%Y') DESC";
            $result_query = mysqli_query($connect, $query);

            $data = array();
            while ($row = mysqli_fetch_assoc($result_query)) {
                printf("%s (%s)\n", $row["dob"], $row["count"]);
                $data[$row["dob"]] = $row["count"];
            }
            $response = $data;
            break;

    }
    return $response;

}
?>




