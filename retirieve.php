<?php
    include("dbCon.php");

    $fetch = "SELECT * FROM style_details";

    $result = $con->query($fetch);

    if($result->num_rows > 0){
        $table = $result->fetch_assoc();
        echo json_encode($table);
    }else{
        echo "Dadxgsdg not found";
    }
?>