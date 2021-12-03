<?php
    include("dbCon.php");

     if(isset($_POST['schedule']) && isset($_POST['team'])){
        $schedule = $_POST['schedule'];
        $team = $_POST['team'];               
         
         $fetch = "SELECT * FROM line_ho where schedule = '$schedule'";
         
         $result = $con->query($fetch);       
         
         if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
             $json[] = $row;
            }   
            echo json_encode($json);
            }else{
                echo "Data not found";
            }
    }
?>