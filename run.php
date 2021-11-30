<?php
    include('dbCon.php');

    if($_POST['flag'] == 'style_details'){
        if(isset($_POST['schedule']) && isset($_POST['team']) && isset($_POST['date_planning']) 
        && isset($_POST['color']) && isset($_POST['style']) && isset($_POST['name_planning']) && isset($_POST['section']) ){

        $schedule = $_POST['schedule'];
        $team = $_POST['team'];
        $date_planning = $_POST['date_planning'];
        $color = $_POST['color'];
        $style = $_POST['style'];
        $name_planning = $_POST['name_planning'];
        $section = $_POST['section'];
        
        $sql = "INSERT INTO style_details VALUES(?,?,?,?,?,?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sisssss", $schedule,$team, $date_planning, $color, $style, $name_planning, $section );

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }
    }
    }

        if($_POST['flag'] == 'line_ho'){
        if(isset($_POST['schedule']) && isset($_POST['team']) && isset($_POST['date_HO']) 
        && isset($_POST['open_time_HO']) && isset($_POST['name_HO']) && isset($_POST['act_HO_time']) 
        && isset($_POST['name_HO1']) && isset($_POST['remark_LHO'])){
        
        $schedule = $_POST['schedule'];
        $team = $_POST['team'];
        $date_HO = $_POST['date_HO'];
        $open_time_HO = $_POST['open_time_HO'];
        $name_HO = $_POST['name_HO'];
        $act_HO_time = $_POST['act_HO_time'];
        $name_HO1 = $_POST['name_HO1'];
        $remark_LHO = $_POST['remark_LHO'];
        
        $sql = "INSERT INTO line_ho VALUES(?,?,?,?,?,?,?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sissssss", $schedule,$team, $date_HO, $open_time_HO, $name_HO, $act_HO_time, $name_HO1, $remark_LHO);

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }
    }
    }

        if($_POST['flag'] == 'layout'){
        if(isset($_POST['schedule']) && isset($_POST['team']) && isset($_POST['date_lto']) 
        && isset($_POST['time_lto']) && isset($_POST['name_lto1']) && isset($_POST['lo_finished_time']) 
        && isset($_POST['name_lto2']) && isset($_POST['remark_layout'])){
        
        $schedule = $_POST['schedule'];
        $team = $_POST['team'];
        $date_lto = $_POST['date_lto'];
        $time_lto = $_POST['time_lto'];
        $name_lto1 = $_POST['name_lto1'];
        $lo_finished_time = $_POST['lo_finished_time'];
        $name_lto2 = $_POST['name_lto2'];
        $remark_layout = $_POST['remark_layout'];
        
        $sql = "INSERT INTO layout VALUES(?,?,?,?,?,?,?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sissssss", $schedule,$team, $date_lto, $time_lto, $name_lto1, $lo_finished_time, $name_lto2, $remark_layout);

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }
    }
    }

        if($_POST['flag'] == 'internal_mc'){
        if(isset($_POST['schedule']) && isset($_POST['team']) 
        && isset($_POST['imc1']) && isset($_POST['nos1']) && isset($_POST['imc1_time']) && isset($_POST['imc2']) && isset($_POST['nos2']) && isset($_POST['imc2_time'])
        && isset($_POST['imc3']) && isset($_POST['nos3']) && isset($_POST['imc3_time']) && isset($_POST['imc4']) && isset($_POST['nos4']) && isset($_POST['imc4_time']) 
        && isset($_POST['imc5']) && isset($_POST['nos5']) && isset($_POST['imc5_time']) 
        && isset($_POST['mcs_start_time']) && isset($_POST['mcs_end_time']) && isset($_POST['needle_ho_start_time']) 
        && isset($_POST['needle_ho_end_time']) && isset($_POST['name_ind_eng']) && isset($_POST['name_mach_eng']) 
        && isset($_POST['remark_imc'])){
        
        $schedule = $_POST['schedule'];
        $team = $_POST['team']; 
        $imc1 = $_POST['imc1']; 
        $nos1 = $_POST['nos1']; 
        $imc1_time = $_POST['imc1_time'];
        $imc2 = $_POST['imc2']; 
        $nos2 = $_POST['nos2']; 
        $imc2_time = $_POST['imc2_time']; 
        $imc3 = $_POST['imc3']; 
        $nos3 = $_POST['nos3']; 
        $imc3_time = $_POST['imc3_time']; 
        $imc4 = $_POST['imc4']; 
        $nos4 = $_POST['nos4']; 
        $imc4_time = $_POST['imc4_time']; 
        $imc5 = $_POST['imc5']; 
        $nos5 = $_POST['nos5'];
        $imc5_time = $_POST['imc5_time'];
        $mcs_start_time = $_POST['mcs_start_time']; 
        $mcs_end_time = $_POST['mcs_end_time'];
        $needle_ho_start_time = $_POST['needle_ho_start_time'];
        $needle_ho_end_time = $_POST['needle_ho_end_time'];
        $name_ind_eng = $_POST['name_ind_eng'];
        $name_mach_eng = $_POST['name_mach_eng'];
        $remark_imc = $_POST['remark_imc'];
        
        
        $sql = "INSERT INTO imcs VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sisiisiisiisiisiiiiiisss", $schedule,$team,  $imc1, $nos1, $imc1_time, $imc2, $nos2, $imc2_time, $imc3, $nos3, 
        $imc3_time, $imc4, $nos4, $imc4_time, $imc5, $nos5, $imc5_time, $mcs_start_time, $mcs_end_time, $needle_ho_start_time,
        $needle_ho_end_time, $name_ind_eng, $name_mach_eng, $remark_imc );

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }
    }
    }

        if($_POST['flag'] == 'feeding'){
        if(isset($_POST['schedule']) && isset($_POST['team']) 
        && isset($_POST['feeding_start_date']) && isset($_POST['feeding_start_time']) 
        // && isset($_POST['mcr1']) && isset($_POST['mcr1_mech']) && isset($_POST['mcr1_time']) && isset($_POST['mcr1_tech']) && isset($_POST['mcr1_tech_mins']) 
        // && isset($_POST['mcr2']) && isset($_POST['mcr2_mech']) && isset($_POST['mcr2_time']) && isset($_POST['mcr2_tech']) && isset($_POST['mcr2_tech_mins']) 
        // && isset($_POST['mcr3']) && isset($_POST['mcr3_mech']) && isset($_POST['mcr3_time']) && isset($_POST['mcr3_tech']) && isset($_POST['mcr3_tech_mins']) 
        // && isset($_POST['mcr4']) && isset($_POST['mcr4_mech']) && isset($_POST['mcr4_time']) && isset($_POST['mcr4_tech']) && isset($_POST['mcr4_tech_mins']) 
        // && isset($_POST['mcr5']) && isset($_POST['mcr5_mech']) && isset($_POST['mcr5_time']) && isset($_POST['mcr5_tech']) && isset($_POST['mcr5_tech_mins'])
        // && isset($_POST['feeding_end_date']) && isset($_POST['feeding_end_time']) && isset($_POST['feeding_mach_eng']) 
        // && isset($_POST['feeding_tech_eng'])
        ){
        
        $schedule = $_POST['schedule']; 
        $team = $_POST['team'];
        $feeding_start_date = $_POST['feeding_start_date']; 
        $feeding_start_time = $_POST['feeding_start_time'];
        $mcr1 = $_POST['mcr1'];
        $mcr1_mech = $_POST['mcr1_mech']; 
        $mcr1_time = $_POST['mcr1_time']; 
        $mcr1_tech = $_POST['mcr1_tech'];
        $mcr1_tech_mins = $_POST['mcr1_tech_mins']; 
        $mcr2 = $_POST['mcr2'];
        $mcr2_mech = $_POST['mcr2_mech']; 
        $mcr2_time = $_POST['mcr2_time']; 
        $mcr2_tech = $_POST['mcr2_tech'];
        $mcr2_tech_mins = $_POST['mcr2_tech_mins'];
        $mcr3 = $_POST['mcr3']; 
        $mcr3_mech = $_POST['mcr3_mech']; 
        $mcr3_time = $_POST['mcr3_time']; 
        $mcr3_tech = $_POST['mcr3_tech']; 
        $mcr3_tech_mins = $_POST['mcr3_tech_mins']; 
        $mcr4 = $_POST['mcr4'];
        $mcr4_mech = $_POST['mcr4_mech']; 
        $mcr4_time = $_POST['mcr4_time']; 
        $mcr4_tech = $_POST['mcr4_tech'];
        $mcr4_tech_mins = $_POST['mcr4_tech_mins']; 
        $mcr5 = $_POST['mcr5'];
        $mcr5_mech = $_POST['mcr5_mech']; 
        $mcr5_time = $_POST['mcr5_time']; 
        $mcr5_tech = $_POST['mcr5_tech'];
        $mcr5_tech_mins = $_POST['mcr5_tech_mins'];
        $feeding_end_date = $_POST['feeding_end_date']; 
        $feeding_end_time = $_POST['feeding_end_time']; 
        $feeding_mach_eng = $_POST['feeding_mach_eng']; 
        $feeding_tech_eng = $_POST['feeding_tech_eng'];
        
       
        
        $sql = "INSERT INTO imcs VALUES(?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("si", 
        $schedule,$team,
        $feeding_start_date, $feeding_start_time, 
        $mcr1, $mcr1_mech, $mcr1_time, $mcr1_tech, $mcr1_tech_mins,
        $mcr2, $mcr2_mech, $mcr2_time, $mcr2_tech, $mcr2_tech_mins,
        $mcr3, $mcr3_mech, $mcr3_time, $mcr3_tech, $mcr3_tech_mins,
        $mcr4, $mcr4_mech, $mcr4_time, $mcr4_tech, $mcr4_tech_mins,
        $mcr5, $mcr5_mech, $mcr5_time, $mcr5_tech, $mcr5_tech_mins, 
        $feeding_end_date, $feeding_end_time, $feeding_mach_eng, $feeding_tech_eng);

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }  
    }   
    }

        if($_POST['flag'] == 'ie'){
        if(isset($_POST['schedule']) && isset($_POST['team']) && isset($_POST['ie_start_date']) 
        && isset($_POST['ie_start_time']) && isset($_POST['ie_end_date']) && isset($_POST['ie_end_time']) 
        && isset($_POST['ach_ieo']) && isset($_POST['ach_pex'])){
        
        $schedule = $_POST['schedule'];
        $team = $_POST['team'];
        $ie_start_date = $_POST['ie_start_date'];
        $ie_start_time = $_POST['ie_start_time'];
        $ie_end_date = $_POST['ie_end_date'];
        $ie_end_time = $_POST['ie_end_time'];
        $ach_ieo = $_POST['ach_ieo'];
        $ach_pex = $_POST['ach_pex'];
        
        $sql = "INSERT INTO ie VALUES(?,?,?,?,?,?,?,?)" ;

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sisisiss", $schedule,$team, $ie_start_date, $ie_start_time, $ie_end_date, $ie_end_time, $ach_ieo, $ach_pex);

        
        if($stmt->execute()){
            echo "Data inserted";
        }else{
            echo $con->error;
        }
    }
}
?>