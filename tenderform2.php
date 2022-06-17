<?php

session_start();
// Include database connection file
include 'config.php';

if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}

?>
<style type="text/css">
    .nav-link{
   color: #f9f6f6;
   font-size: 14px;
    }   
</style>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UITM VEHICLE PROCUREMENT SYSTEM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
       <body>
       <nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-10">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="" style="color: #5b5757;"><b>UITM</b></a>
               <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
                 <a class="nav-link" href="logout.php">Hi, <?php echo ucwords($_SESSION['NAME']); ?> Log out</a>
         </li>
          </ul>
      </nav>      
      <div class="container-fluid">
          <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-info sidebar" style="height: 569px">
                 <div class="sidebar-sticky">
                 <ul class="nav flex-column" style="color: #5b5757;">
                <li class="nav-item">
               <a class="nav-link active" href="">
               <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
               </a>
                </li>
            <?php if($_SESSION['ROLE'] == 'supplier'){ ?>
            <h6>Sale & Purchase</h6>   
                <li class="nav-item">
               <a class="nav-link" href="">
                       <spanin data-feather="users"></span>
                   Payment
               </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="">
                   <span data-feather="users"></span>
                   Sales
               </a>
                </li>
                <li class="nav-item">
               <a class="nav-link" href="">
                       <span data-feather="users"></span>
                   Purchases
               </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['ROLE'] == 'admin' || $_SESSION['ROLE'] == 'supplier' || $_SESSION['ROLE'] == 'officer') { ?>
            <h6>Catalog</h6>      
                <li class="nav-item">
               <a class="nav-link" href="">
                   <span data-feather="users"></span>
                   Products
               </a>
                </li>
                <li class="nav-item">
               <a class="nav-link" href="">
                       <span data-feather="users"></span>
                   Category
               </a>
                </li>   
                <h6>Order & Shipping</h6>
               <li class="nav-item">
                       <a class="nav-link" href="">
                       <span data-feather="users"></span>
                  Shipping
                   </a>
               </li>
               
               <li class="nav-item">
                   <a class="nav-link" href="">
                       <span data-feather="users"></span>
                  Customers
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="">
                  <span data-feather="users"></span>
                  Order
                   </a>
               </li>
            <?php } ?>                  
             </ul>
         </div>
          </nav>
     
          <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center ">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3>UiTM Tender Request Form</h3>
                                
                                <form method="post" action="tenderaction.php" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" >
                                                 <p>Please select the vehicle type:</p>
                                              <input type="radio" id="html" name="veh_type" value="Bus" onclick="text(0)" required>
                                              <label for="html">Bus</label>
                                              <input type="radio" id="css" name="veh_type" value="Van" onclick="text(1)" required>
                                              <label for="van">Van</label>
                                              <input type="radio" id="javascript" name="veh_type" value="Car" onclick="text(2)" required>
                                              <label for="car">Car</label>
                                            </div>
                                        </div>
                                        <!-- test-->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                             <label for="vehsegment">Please select vehicle segment:</label><br>
                                                <select  name="veh_segment" id="bussegment" required>
                                                  <option value="Shuttle bus">Shuttle bus</option>
                                                  <option value="Mini bus">Mini bus</option>
                                                  <option value="Single-decker bus">Single-decker bus</option>
                                                </select>
                                                
                                                <select  name="veh_segment" id="vansegment" required>
                                                  <option value="Medium van">Medium van</option>
                                                  <option value="Large van">Large van</option>
                                                </select>
                                                
                                                
                                                <select  name="veh_segment" id="carsegment"required>
                                                  <option value="Sedan">Sedan</option>
                                                  <option value="Pickup">Pickup</option>
                                                  <option value="CUV">CUV</option>
                                                  <option value="MPV">MPV</option>
                                                </select>
                                                
                                                
                                                    
                                            </div>
                                        </div>
                                        
                    
                                        
                                        <div class="col-md-12">
                                        <p>Tender date</p>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="veh_date" id="subject" placeholder="Date" required>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                    
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img" style="background-image: url(images/uitmfcbus.jpg);">
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script> 
function text(x){
if (x==0){
document.getElementById('bussegment').style.display='block';
document.getElementById('vansegment').style.display='none';
document.getElementById('carsegment').style.display='none';}
if (x==1){
document.getElementById('bussegment').style.display='none';
document.getElementById('vansegment').style.display='block';
document.getElementById('carsegment').style.display='none';}
if (x==2){
document.getElementById('bussegment').style.display='none';
document.getElementById('vansegment').style.display='none';
document.getElementById('carsegment').style.display='block';}
return; 
}

</script>
        
        
        
        
      
      </div>
       </main>
   </div>
    </div>      
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    feather.replace();
</script>         
</body>
</html>