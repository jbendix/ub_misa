<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css" rel="stylesheet">
  </head>

<body style="padding:15px;">

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
				<p>Gil Weber, VP Enterprise Data, M&amp;T</p>
				<p>March 27th</p>
				<hr>
				<p>Other Upcoming Events</p>
				<p>Lastron with Professor Murray</p>
				<p>Sky Zone</p>
				<br>

			</div>

			<!-- This is the aside section -->
			
			<div class="col-md-2 col-md-offset-2 text-center">

			<br>
			<p>RSVP for M&amp;T Speaker Session, March 27th</p>
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