<?php
	include 'config.php';
	if(isset($_GET["pro_id"]) && isset($_GET["tender_id"]) && isset($_GET["off_id"])){
        $countsql= "SELECT pro_id FROM proposal WHERE tender_id = ".$_GET["tender_id"];
        $countproposal = mysqli_query($con,$countsql);
        $countproposal = mysqli_fetch_all($countproposal);
        //print_r(json_encode($countproposal, JSON_PRETTY_PRINT));
        if(!mysqli_query($con,$countsql)){
			die ('Error: ' .mysqli_error($con));
		}
		$sql="UPDATE proposal SET approved = ".$_POST["approval"]." WHERE pro_id = ".$_GET["pro_id"]."";
		if(!mysqli_query($con,$sql)){
			die ('Error: ' .mysqli_error($con));
		}
        if(is_array($countproposal)){
            foreach($countproposal as $currproposal){
                for($i = 0; $i < sizeof($currproposal); $i++){
                    if($currproposal[$i] != $_GET["pro_id"]){
                        $proposalSearch = $currproposal[$i];
                        $sql="UPDATE proposal SET approved = 1 WHERE pro_id = ".$proposalSearch."";
                        if(!mysqli_query($con,$sql)){
                            die ('Error: ' .mysqli_error($con));
                        }
                    }
                }
            }
        } else {
            die("countproposal is not array");
        }
        echo "<script type='text/javascript'>alert('Proposal has been approved!')</script>";
        header('refresh:0;url=officerapproval.php?off_id='.$_GET["off_id"]);
    } else {
        echo "<script type='text/javascript'>alert('ERROR!')</script>";
        header('refresh:0;url=index.php');
    }
?>