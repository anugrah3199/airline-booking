<!DOCTYPE html>
<html lang="en">
<head>
	<title>Airline system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/forcompany.css">
	<link rel="stylesheet" href="css/homepage.css">
	<link rel="stylesheet" href="css/AdminSignin.css">
	<script src="js/login.js"> </script>
	<script src="js/jump.js"> </script>
</head>
<body>
    <?php include('header.php'); ?>
	

	<div class="container" id="homepage">
		<h1><b>Search Flights</b></h1>
		<br />
		<p><b>Choose your flight option</b></p>
		<div class="btn-group btn-group-justified">			
			<div class="btn-group">
			<button id="button1" type="button" href="#oneway" class="btn btn-primary">One-way</button>
			</div>
			<div class="btn-group">
			<button id="button2" type="button" href="#roundtrip" class="btn btn-primary">Round-trip</button>
			</div>
			<div class="btn-group">
			<button id="button3" type="button" href="#all" class="btn btn-primary">Multi Tickit</button>
			</div>
		</div>
		
	<div id="oneway">
		<form role="form" action="SearchResultOneway.php" method="post">
		  <div class="row">
		  <div class="col-sm-6">
		    <label for="from">From:</label>
		    <input type="text" class="form-control" id="from" name="from" placeholder="City or Code" required>
		  </div>
		  <div class="col-sm-6">
		    <label for="to">To:</label>
		    <input type="text" class="form-control" id="to" name="to" placeholder="City or Code" required>
		  </div>
		  </div>
		  <hr >
		  <div class="row">
			  <div class="col-sm-6">
			    <label for="depart">Depart:</label>
			    <input type="date" class="form-control" id="depart" name="StartDate" required>
			</div>
			<div class="col-sm-6">
		    <label for="class">Class:</label>
		    <select class="form-control" name="class">
		      <option value="Economy">Economy</option>
		      <option value="Business">Business</option>   
		    </select>
		  </div> 
		  </div> 
		  <hr>
		  <div class="row">
			<div class="col-sm-6">
			  <label for="Adults">Adults:</label>
			  <input type="number" class="form-control" id="from" name="Adults" placeholder="No of Adults" required>
			</div>
			<div class="col-sm-6">
			  <label for="child">Children</label>
			  <input type="number" class="form-control" id="to" name="child" placeholder="No of Children" required>
			</div>
			</div>
			<hr >
		  <div class="row">
		  <div class="col-sm-6"> 
		    <label class="radio-inline">
		      <input type="radio" name="stop" value="nonstop" checked>Non-Stop
		    </label>
		    <label class="radio-inline">
		      <input type="radio" name="stop" value="1stop">1 Stop
		    </label>
		  </div> 
		  </div> 
		  <br>
		  <div class="btn-group btn-group-justified">	
				<div class="btn-group">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="btn-group">
					<button type="reset"  class="btn btn-info" value="Reset">Reset</button>
				</div>
		  </div>
		</form>
	</div>


	<div id="roundtrip">
		<form role="form" action="SearchResultRoundtrip.php" method="post">
			 <div class="row"> 
			  <div class="col-sm-6">
			    <label for="from">From:</label>
			    <input type="text" class="form-control" id="from" name="from" placeholder="Code " required>
			  </div>
			  <div class="col-sm-6">
			    <label for="to">To:</label>
			    <input type="text" class="form-control" id="to" name="to" placeholder="Code" required>
			  </div>
			 </div>
			 <hr >
			<div class="row">  
			  <div class="col-sm-6">
			    <label for="depart">Depart:</label>
			    <input type="date" class="form-control" id="depart" name="depart" required>
			  </div>  
			  <div class="col-sm-6">
			    <label for="return">Return:</label>
			    <input type="date" class="form-control" id="return" name="return" required>
			  </div>
			 </div>
			 <hr >
			 <div class="row">   
			  <div class="col-sm-6">
			    <label for="class">Class:</label>
			    <select class="form-control" name="class">
			      <option value="Economy">Economy</option>
			      <option value="Business">Business</option>   
			    </select>
			  </div> 
			 </div>
			 <hr>
			 <div class="row">
				<div class="col-sm-6">
				  <label for="Adults">Adults:</label>
				  <input type="number" class="form-control" id="from" name="Adults" placeholder="No of Adults" required>
				</div>
				<div class="col-sm-6">
				  <label for="child">Children</label>
				  <input type="number" class="form-control" id="to" name="child" placeholder="No of Children" required>
				</div>
				</div>
				<br >
			  <div class="form-group"> 
			    <label class="radio-inline">
			      <input type="radio" name="stop" value="nonstop" checked>Non-Stop
			    </label>   
			  </div> 
			  <div class="btn-group btn-group-justified">	
				<div class="btn-group">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="btn-group">
					<button type="reset"  class="btn btn-info" value="Reset">Reset</button>
				</div>
		  	  </div>
			</form>
	</div>
	<div id="all">
		<form role="form" action="SearchResultAll.php" method="post">
			 <div class="row"> 
			  <div class="col-sm-6">
			  <label for="selectdate">Select a date:</label>
			  <input type="date" class="form-control" id="selectdate" name="selectdate" required>
			  </div>
			 </div>
			 <br>
			<div class="row">   
			  <div class="col-sm-6">
			  <button type="submit" class="btn btn-primary">Show ALL</button>
			  </div>
			</div> 
			</form>

	</div>	

	</div>	
	<?php include('footer.php'); ?>
	
	

</body>
</html>