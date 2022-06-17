<!doctype html>
<html lang="en">
  <head>
  	<title>UiTM Transportation Tender Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center ">
				<img width="50%" src="images/logouitm.png"/>
				</div>
			</div>
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
												<div class="form-group" id="vsgmt">
											
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

	
  <script type="text/javascript"> 
function text(x){
if (x==0){
	let str_bus = `
		<label for="vehsegment">Please select vehicle segment:</label><br>
		<select  name="veh_segment" id="bussegment" required>
			<option value="Shuttle bus">Shuttle bus</option>
			<option value="Mini bus">Mini bus</option>
			<option value="Single-decker bus">Single-decker bus</option>
		</select>
	`;
	document.getElementById('vsgmt').innerHTML=str_bus;


}
if (x==1){
	let str_van = `
		<label for="vehsegment">Please select vehicle segment:</label><br>
		<select  name="veh_segment" id="vansegment" required>
			<option value="Medium van">Medium van</option>
			<option value="Large van">Large van</option>
		</select>
	`;
	document.getElementById('vsgmt').innerHTML=str_van;


}
if (x==2){
	let str_car = `
		<label for="vehsegment">Please select vehicle segment:</label><br>
		<select  name="veh_segment" id="carsegment"required>
			<option value="Sedan">Sedan</option>
			<option value="Pickup">Pickup</option>
			<option value="CUV">CUV</option>
			<option value="MPV">MPV</option>
		</select>
`;
	document.getElementById('vsgmt').innerHTML=str_car;
}
return; 
}

	</script>

	</body>
</html>

