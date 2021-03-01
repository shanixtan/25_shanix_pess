<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dispatch</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container style=width:900px">
 <?php
	include "header.php";
	?>
  <section class="mt-3">
    <form>
      <div class="form-group row">
        <label for="callerName" class="co-sm-4 col-form-label">Caller's Name</label>
         <div class="col-sm-8">
			 <span>
			 	David
				 <input type="hidden" id="callerName" name="callerName" value="David">
			 </span>
		 </div>
        </div>
		  <div class="form-group row">
        <label for="contactNo" class="co-sm-4 col-form-label">Contact No</label>
         <div class="col-sm-8">
			 <span>
			 	91234567
				 <input type="hidden" id="contactNo" name="contactNo" value="91234567">
			 </span>
		 </div>
        </div>
		  <div class="form-group row">
        <label for="locationOfIncident" class="co-sm-4 col-form-label">Location of Incident</label>
         <div class="col-sm-8">
			 <span>
			 	CCK
				<input type="hidden" id="locationOfIncident" name="locationOfIncident" value="CCK">
			 </span>
	     
		 </div>
        </div>
		<div class="form-group row">
        <label for="typeOfIncident" class="co-sm-4 col-form-label">Type of Incident</label>
         <div class="col-sm-8">
			 <span>
				 <input id="typeOfIncident"
			  name="typeOfIncident" value="Fire">
			 </span>
			 
		 </div>
        </div>
		<div class="form-group row">
        <label for="descriptionOfIncident" class="co-sm-4 col-form-label">Description of Incident</label>
         <div class="col-sm-8">
			 <span>
			 	Fire at CCK
			 <input name="descriptionOfIncident"
					   type="hidden"
					   rows="5"
					   id="Fire at CCK"
					   >
			</span>
			 
		 </div>
        </div>
			<div class="form-group row">
        <label for="patrolCar" class="co-sm-4 col-form-label">Choose Patrol Car(s)</label>
         <div class="col-sm-8">
			<table class="table table-striped">
				<tbody>
					<tr>
						<th>Car Number</th>
						<th>Status</th>
						<th></th>
					</tr>
					<tr>
						<td>SJA667A</td>
						<td>Free</td>
						<td>
							<input type="checkbox" name="cbCarSelection[]">
						</td>
					</tr>
					<tr>
						<td>SG9889D</td>
						<td>Free</td>
						<td>
							<input type="checkbox" name="cbCarSelection[]">
						</td>
					</tr>
					<tr>
						<td>SJ8234A</td>
						<td>Free</td>
						<td>
							<input type="checkbox" name="cbCarSelection[]">
						</td>
					</tr>
				</tbody>
			 </table>
				</div>
		 <div class="form-group row">
         <div class="offset-sm-4 col-sm-8">
		    <button type="submit" class="btn btn-primary" name="submit" id="submit">Dispatch</button>
		 </div>
        </div>	
	</div>

</form>
</section>
	<?php
	include "footer.php";
	?>
<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
