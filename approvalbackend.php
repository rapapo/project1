<?php
    require_once "config.php";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {

        $getAppSQL = "SELECT p.pro_id, t.tender_id, p.pro_price, p.pro_date, p.supp_name FROM proposal AS p JOIN tender AS t ON p.tender_id = t.tender_id WHERE t.off_id = ".$_GET["off_id"];
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
                array_push($outputRowData, $currApp[4]);
                array_push($outputRowData, '
                <button class="open-button" onclick="openForm('.$currApp[0].', '.$currApp[1].')">APPROVE</button>
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