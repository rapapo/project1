<?php

session_start();
// Include database connection file
require_once 'config.php';

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


<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 12px;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: center;
}

div{

    position: relative;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #d2dee7;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<div class="container">
  <form action="proposalaction.php" method="post">
  <h2>Proposal Submission Form</h2>
<p>Any supplier interested in any tender may use this form to submit the proposal..The proposal will be judge by UiTM officer. You have to check the result at least three day after the due date of the tender.</p>
    <!--Company Name-->
    <div class="row">
    <div class="col-25">
      <label for="supp_name">Company Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="supp_name" name="supp_name" placeholder="e.g.: Megah Holdings SDN BHD">
    </div>
  </div>

    <!--Company Number-->
    <div class="row">
    <div class="col-25">
      <label for="supp_num">Company Fax Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="supp_num" name="supp_num" placeholder="e.g.: 011-1111 1100">
    </div>
  </div>

    <!--Company Email-->
    <div class="row">
    <div class="col-25">
      <label for="supp_email">Company Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="supp_email" name="supp_email" placeholder="e.g.: MegahHoldings@gmail.com">
    </div>
  </div>

    <!--Tender ID-->
    <div class="row">
    <div class="col-25">
      <label for="tender_id">Tender ID</label>
    </div>
    <div class="col-75">
      
      <?php>
        include "config.php"; // Database connection using PDO

        //$sql="SELECT name,id FROM student"; 

        $sql="SELECT officer FROM off_name order by name"; 

        /* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

        echo "<select name=student value=''>Student Name</option>"; // list box select command

        foreach ($dbo->query($sql) as $row){//Array or records stored in $row

        echo "<option value=$row[id]>$row[name]</option>"; 

        /* Option values are added by looping through the array */ 

        }
          echo "</select>";// Closing of list box
          ?>
    </div>
  </div>

    <!--Vehicle Colour-->
    <div class="row">
    <div class="col-25">
        <label for="veh_colour">Vehicle Colour</label>
    </div>
    <div class="col-75">
        <input type="text" id="veh_colour" name="veh_colour" placeholder="e.g.: Black, White,...">
    </div>
 </div>
 
    <!--Vehicle Engine-->
    <div class="row">
    <div class="col-25">
        <label for="veh_engine">Vehicle Engine</label>
    </div>
    <div class="col-75">
        <input type="text" id="veh_engine" name="veh_engine" placeholder="e.g.: Petrol Engine, Diesel Engine, Gas Engine,...">
    </div>
 </div>

    <!--Vehicle Brand-->
    <div class="row">
    <div class="col-25">
        <label for="pro_brand">Vehicle Brand</label>
    </div>
    <div class="col-75">
        <input type="text" id="pro_brand" name="pro_brand" placeholder="e.g.: Perodua, Proton, Honda, Toyota,... ">
    </div>
 </div>

    <!--Vehicle Condition-->
    <div class="row">
    <div class="col-25">
        <label for="veh_condition">Vehicle Condition</label>
    </div>
    <div class="col-75">
        <input type="text" id="veh_condition" name="veh_condition" placeholder="e.g.: New, Used,...">
    </div>
 </div>

    <!--Proposal price-->
    <div class="row">
    <div class="col-25">
        <label for="pro_price">Proposal Price Offer</label>
    </div>
    <div class="col-75">
        <input type="text" id="pro_price" name="pro_price" placeholder="e.g.: RM5,900.00">
    </div>
 </div>

    <!--Proposal date-->
    <div class="row">
    <div class="col-25">
        <label for="pro_date">Proposal Submission Date</label>
    </div>
    <div class="col-75">
    <form action="/action_page.php">
        <label for="pro_date">Date:</label>
        <input type="date" id="pro_date" name="pro_date">
    
    </div>
  </div>

    <!--State-->
    <div class="row">
    <div class="col-25">
      <label for="supp_state">State</label>
    </div>
    <div class="col-75">
       
      <select id="supp_state" name="supp_state" >
        <option value="klwp">Kuala Lumpur W/P</option>
        <option value="klwl">Kuala Lumpur W/L</option>
        <option value="sel">Selangor</option>
        <option value="jor">Johor</option>
        <option value="perak">Perak</option>
        <option value="ns">Negeri Sembilan</option>
        <option value="mel">Melaka</option>
        <option value="kel">Kelantan</option>
        <option value="ter">Terengganu</option>
        <option value="perlis">Perlis</option>
        <option value="sab">Sabah</option>
        <option value="ser">Serawak</option>
        <option value="pah">Pahang</option>
        <option value="pp">Pulau Penang</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="You may use this space to describe your proposal at your best.Good luck." style="height:200px"></textarea>
    </div>
  </div>
  <br>
 <div>
    <input  type="submit" value="Submit">
  </div>
  </form>
</div>
    </div>      
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    feather.replace();
</script>         
</body>
</html>