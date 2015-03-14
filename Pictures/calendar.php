<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css" rel="stylesheet">
  </head>

<body>

<?php 
include ("includes/pageheader.php");
 ?>

<div class="container">
  
<h3>Upcoming Events</h3>
<p>Meetings Every Friday at 4PM, Jacobs 103</p>
<br>
<p>Reema Bhatt, IT Risk + Assurance, EY</p>
<p>February 13th</p>
<br>
<p>Web Development Workshop</p>
<p>March 6th</p>
<p>Please RSVP Below</p>

<div class="row">
		<form class="form-horizontal" method="post" action="rsvp.php" enctype="text/plain">
		          <div class="col-md-2">
		            <div class="form-group">
		               <input  name="fname" type="text" placeholder="First Name" class="form-control">
		            </div>
		            <div class="form-group">
		              <input  name="lname" type="text" placeholder="Last Name" class="form-control">
		            </div>
		            <div class="form-group">
		            <button type="submit" class="btn btn-sm">Submit</button>
		            </div>
		           </div>        
		</form>
	
</div>

<br>

<p>Gil Weber, VP Enterprise Data, M&amp;T</p>
<p>March 27th</p>
<br>
<p>Other Upcoming Events</p>
<p>Lastron with Professor Murray</p>
<p>Sky Zone</p>
<br>

</div>


<?php 
include ('includes/footer.php');
 ?>


</div>
</body>

</html>