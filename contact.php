<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css" rel="stylesheet">
  </head>

<body style="padding:15px;">

<?php 
include ("includes/pageheader.php");
 ?>

  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
          <form class="form-horizontal" method="get" action="send.php" enctype="text/plain">
          <div class="container">
            <h2>Contact Us</h2>
            <div class="form-group">
               <input name="first_name" type="text" placeholder="First Name" class="form-control">
            </div>

            <div class="form-group">
              <input name="last_name" type="text" placeholder="Last Name" class="form-control">
            </div>

            <div class="form-group">
              <input name="email" type="text" placeholder="Email Address" class="form-control">
            </div>

            <div class="form-group">  
              <textarea class="form-control" name="message" placeholder="Enter your message for us here." rows="7"></textarea>
            </div>

            <div class="form-group">
              <button type="reset" class="btn btn-default" value="Clear Form">Clear</button>
              <button type="submit" class="btn btn-default">Submit</button>                         
            </div>

          </div>
          </form>
      </div>
    </div>
  </div>

<?php 
include ('includes/footer.php');
 ?>

</body>

</html>