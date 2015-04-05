
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>UB Management Information Systems</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	.borderless tbody tr td, .borderless tbody tr th, .borderless thead tr th {
    border: none;
}
}
</style>
  </head>

<body style="padding:15px;">

<?php 
include ("includes/pageheader.php");
 ?>


<!-- CAROUSEL -->
<div class="container" style="margin-bottom: 20px;" align="center">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!--Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img class="img-responsive center-block" src="Pictures/CFC2.jpg" alt="#">
	      <div class="carousel-caption"> 
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="Pictures/lc4.jpg" alt="#">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="Pictures/CFC6.jpg" alt="#">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="Pictures/HTML2.jpg" alt="#">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item">
	      <img class="img-responsive center-block" src="Pictures/CFC8.jpg" alt="#">
	      <div class="carousel-caption">
	      </div>
	    </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<!-- END Carousel -->

  <br><br>

  <div class="row">
    <div class="col-md-8 col-md-offset-2"> 

        <p class="lead">Mission Statement: <em>To inspire those who seek a career in technology, and spark an interest in those who have thoughts of pursuing a career in this field.</em></p>
      </div>
  </div>
  <hr>


  <div class="row">
  <div class="col-md-6 col-md-offset-3">

  		<table class="table borderless">
  		<tr>
	  		<td>
	  		<img src="Pictures/MyIcons/agreement.png">
	  		</td>
	  		<td>
	  		<p class="lead text-primary">Professional Networking</p>
	  		</td>
	  	</tr>
	 <tr>
	  		<td>
	  		<img src="Pictures/MyIcons/businessman277.png">
	  		</td>
	  		<td>
	  		<p class="lead text-primary">Industry Presentations</p>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td>
	  		<img src="Pictures/MyIcons/prize3.png">
	  		</td>
	  		<td>
	  		<p class="lead text-primary">Volunteering Opportunities</p>
	  		</td>
	  	</tr>
	  	 <tr>
	  		<td>
	  		<img src="Pictures/MyIcons/businessman276.png">
	  		</td>
	  		<td>
	  		<p class="lead text-primary">Social Events</p>
	  		</td>
	  	</tr>
	  	</table>	

  </div>
</div>

<hr>



  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  	MISA Office Hours -- Jacobs 206C
  </button>
  <br>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            MISA Office Hours
          </div>
          <div class="modal-body">
              <table data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">
                  <thead>
                      <tr>
                          <th data-field="monday">Monday</th>
                          <tr><td>10:30 AM - 12:30 PM</td></tr>
                          <tr><td>3:30 PM - 4:30 PM</td></tr>
                          <th data-field="tuesday">Tuesday</th>
                          <tr><td>3:30 PM - 6:30 PM</td></tr>
                          <th data-field="wednesday">Wednesday</th>
                          <tr><td>3:30 PM - 4:30 PM</td></tr>
                          <th data-field="thursday">Thursday</th>
                          <tr><td></td></tr>
                          <th data-field="friday">Friday</th>
                          <tr><td>3:00 PM - 4:00 PM</td></tr>
                      </tr>
                  </thead>
              </table><br>
              <p class="text-danger"><em>*or by appointment</em></p>
              <p class="text-danger"><em>Please email misa.sunybuffalo@gmail.com</em></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
          </div>
        </div>
      </div>
    </div>

    <br>
    
<!-- MIS THIS WEEK SECTION -->
    <div class="col-md-6 col-md-offset-3"> 
        <div class="well well-sm">

          <p class="text-center lead"><u><strong>MIS THIS WEEK</strong></u></p>
          <p class="text-center"><em>Spring Semester 2015</em></p>
          <p class="text-center"><em>updated for week of 04/06 - 04/10</em></p>


          <div class="row">
          <div class="col-md-6 text-center">
          <p class="text-center"><strong>MGS 405:</strong></p>
          <p class="text-center">Assingment Due Tuesday</p>
          <p class="text-center"><a href="http://www.acsu.buffalo.edu/~fineberg/mgs405-spring2015/" target="_blank">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="MGS405 Course Website">Course Website</button></a>&nbsp;&nbsp;<a href="http://mgt.buffalo.edu/departments/mss/djmurray/mgs314/syllabus.htm" target="_blank"></a></p>
         
          <p class="text-center"><strong>MGS 425:</strong></p>
          <p class="text-center">Project</p>
          <p class="text-center"><a href="pictures/MGS425.pdf" target="_blank">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="MGS425 Syllabus">Syllabus</button></a></p>
          </div>

          <div class="col-md-6">
          <p class="text-center"><strong>MGS 410/610:</strong></p>
          <p class="text-center">HW5 Due Thursday</p>
          <p class="text-center"><a href="http://mgt.buffalo.edu/departments/mss/djmurray/mgs610/" target="_blank">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="right" title="MGS410/610 Course Website">Course Website</button></a></p>

          <p class="text-center"><strong>MGS 351:</strong></p>
          <p class="text-center">HW4 Due in Lab Next Week</p>
          <p class="text-center"><a href="http://mgt.buffalo.edu/departments/mss/djmurray/mgs351/" target="_blank">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="right" title="MGS351 Course Website">Course Website</button></a></p>
          </div>


          </div> 

        </div>
    </div> 
    <!-- END MIS THIS WEEK -->



  </div>
</div>

<div class="text-center">Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> 
  		from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by 
  		<a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
<?php 
include ('includes/footer.php');
 ?>



</div>
</body>

</html>