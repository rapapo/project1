<?php
    require_once "config.php";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {

        $getAppSQL = "SELECT tender_id, veh_type, veh_segment, veh_date FROM tender";
        $appRes = mysqli_query($con, $getAppSQL);

        
        if(!is_bool($appRes))
        {

            $outputTableData=array();
            $outputAppArr=array();
            $appArr=mysqli_fetch_all($appRes);
            $appArr=array_values($appArr);

            foreach($appArr as $currApp)
            {

                $outputRowData=array();
                array_push($outputRowData, $currApp[0]);
                array_push($outputRowData, $currApp[1]);
                array_push($outputRowData, $currApp[2]);
                array_push($outputRowData, $currApp[3]);
                array_push($outputRowData, '
                <button class="open-button" onclick="openForm('.$currApp[0].')">ASSIGN OFFICER</button>
                    ');
                array_push($outputTableData, $outputRowData);
            }

            $outputAppArr=array("data"=>$outputTableData);
        }

        
        
        else
        {
            header('X-PHP-RESPONSE-Code: 500', true,500);
            die();
        }

        header("Content-Type: application/json");
        echo json_encode($outputAppArr, JSON_PRETTY_PRINT);
        die();
    
    }
    else
    {
        header('X-PHP-RESPONSE-Code: 500', true,500);
        die();
    }
 
?>