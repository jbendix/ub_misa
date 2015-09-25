<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

<body>

<?php 
include ("includes/pageheader.php");
 ?>

<h2 class="text-center">Events</h2>

	<div class="row">

			
			<div class="col-md-offset-3 col-md-6">
		
				<p>Meetings Every Friday</p>
				<p>Where: Alfiero 122 </p>
				<p>When: 3:00 PM</p>
				

				<table class="table table-striped">
				<tr>
					<td><p>Kick-Off Meeting</p></td>
					<td><p>September 18th</p></td>
					<td>
					
					</td>
				</tr>
				
				<tr>
					<td><p>Brick House</p></td>
					<td><p>September 25th</p></td>
					<td></td>
				</tr>

				<tr>
					<td><p>Web Development Workshop</p></td>
					<td><p>October 2nd</p></td>
					<td>
						<form class="form-horizontal" method="get" action="rsvp.php" enctype="text/plain">		    
		    		<div class="form-group">
		        		<input id="studentname"  name="studentname" type="text" placeholder="Your Full Name" class="form-control" />
		    		</div>
		    		<div class="form-group">
		       			 <input  name="ubemail" type="text" placeholder="UB Email" class="form-control" />
		   			 </div>
		    			<div class="form-group">
		    				<button type="submit" class="btn btn-sm">RSVP</button>
		    			</div>	         
	  				</form>
					</td>
				</tr>
				
				<tr>
					<td><p>Lasertron</p></td>
					<td><p>October 7th</p></td>
					<td></td>
				</tr>
				
				<tr>
					<td><p>Ryan Osborne, Director, Deloitte</p></td>
					<td><p>October 16th</p></td>
					<td></td>
				</tr>

				<tr>
					<td><p>Mark Kumro, VP M&amp;T, Resume Workshop</p></td>
					<td><p>October 23rd</p></td>
					<td></td>
				
				</tr>

				<tr>
					<td><p>Brick House</p></td>
					<td><p>October 30th</p></td>
					<td></td>
				</tr>

				<tr>
					<td><p>GE Information Technology Leadership Program</p></td>
					<td><p>November 6th</p></td>
					<td>

					</td>
				</tr>


				</table>


			</div>


	</div>


<?php 
include ('includes/footer.php');
 ?>


</div>


</body>


</html>