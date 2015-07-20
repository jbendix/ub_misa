<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>

<?php 
include ("includes/pageheader.php");
 ?>

	<div class="row">

			
			<div class="col-md-6 col-md-offset-1 text-center">

				<h3>Events</h3>
				<p>Meetings Every Friday</p>
				<p>Where: Alfiero 103 </p>
				<p>When: 4:00 PM</p>
				<hr>
				<p>Reema Bhatt, IT Risk + Assurance, EY</p>
				<p>February 13th</p>
				<hr>
				<p>Web Development Workshop</p>
				<p>March 6th</p>
				<hr>
				<p>Ruth Huoh, Business &amp Planning Analyst, M&amp;T</p>
				<p>March 27th</p>
				<hr>
				<p>Chris Hart-Nova, EscapeWire Solutions</p>
				<p>April 10th</p>
				<hr>
				<p>Lasertron</p>
				<p>April 15th, 7PM</p>
				<hr>
				<p>Web Development Workshop: Bootstrap</p>
				<p>April 17th</p>
				<hr>
			</div>

			<!-- This is the aside section -->
			
			<div class="col-md-2 col-md-offset-2 text-center">

			<br>
			<p>RSVP for Bootstrap Workshop, April 17th</p>
				<form class="form-horizontal" method="get" action="rsvp.php" enctype="text/plain">		    
		            <div class="form-group">
		               <input  name="studentname" type="text" placeholder="Your Full Name" class="form-control" />
		            </div>
		            <div class="form-group">
		               <input  name="ubemail" type="text" placeholder="UB Email" class="form-control" />
		            </div>
		            <div class="form-group">
		            <button type="submit" class="btn btn-sm">RSVP</button>
		            </div>	         
				</form>

			</div>
			<div class="col-md-1 col-sm-1">
				<!-- Puts space between edge and aside section -->
			</div>
	</div>



<?php 
include ('includes/footer.php');
 ?>


</div>
</body>

</html>