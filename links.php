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

<h2 class="text-center">MISA Affiliates</h3>
<hr>
<!-- Columns -->
<!-- Left Column -->
<div class="row">

  <div class="col-md-2 col-md-offset-2">
  <table class="table">

  <tr>
  <td class="linkhover">
    <a class="linknocolor1" href="http://cfcbuffalo.org/#/welcome" target="_blank">
    <img class="imagelink" src="pictures/cfc.jpeg">
    </a>  
  </td>
  </tr>
  
  
  <tr>
  <td class="linkhover">
  <a class="linknocolor2" href="http://www.infotechniagara.org/" target="_blank">
    <img class="imagelink" src="pictures/infotech.jpeg" style="width: 155px;height:75px;">  
  </a>
  </td>
  </tr>


    <tr>
    <td class="linkhover">
    <a class="linknocolor3" href="http://buffalony.iiba.org/" target="_blank">
    <img class="imagelink" src="pictures/iiba.jpeg" style="width: 160px;height:80px;"></a>  
    </td>
    </tr>

  </table>  
  </div>

  <div class="col-md-5 col-md-offset-1">

  <span id="infographic1">
    <p>MISSION:  Computers For Children enhances educational opportunities and enriches lives through technology.</p>
    <p>VISION:  Computers For Children is the community’s leading technology resource for high-need populations and those that serve them.</p>
    <img src="Pictures/cfc.jpeg" height="170px;" width="359px;">
  </span>

  <span id="infographic2">
    <p>MISSION: To serve as WNY's professional organization promoting technology through networking, education, recognition and career enrichment.</p>
    <p>VISION: Promote and conduct technology-related networking and educational events
 Collaborate with regional educational institutions to provide and create learning opportunities
Recognize and showcase noteworthy technology professionals and organizations for their contributions to the local and global technology community</p>
<img src="Pictures/infotech.jpeg">
  </span>

  <span id="infographic3">
    <p>MISSION: The mission of the Buffalo Chapter of the International Institute of Business Analysis (IIBA) is to further the business analysis profession by providing regular EDUCATIONAL sessions, formal TRAINING and MENTORING, and NETWORKING opportunities!</p>
    <img src="Pictures/iiba.png" height="60%;" width="60%;">
  </span>

  </div>


</div> <!-- End Row -->


<?php 
include ('includes/footer.php');
 ?>

</div>

<script type="text/javascript">
  $(document).ready(function(){

    $("#infographic1").hide();
    $("#infographic2").hide();
    $("#infographic3").hide();

    $(".linknocolor1").mouseenter(function(){
        $("#infographic1").show();
        $("#infographic2").hide();
        $("#infographic3").hide();
    });
    $(".linknocolor2").mouseenter(function(){
        $("#infographic2").show();
        $("#infographic1").hide();
        $("#infographic3").hide();
    });
    $(".linknocolor3").mouseenter(function(){
        $("#infographic3").show();
        $("#infographic2").hide();
        $("#infographic1").hide();
    });



    /*$(".linknocolor1").mouseleave(function(){
        $("#infographic1").hide();
    });

    $(".linknocolor2").mouseleave(function(){
        $("#infographic2").hide();
    });

    $(".linknocolor3").mouseleave(function(){
        $("#infographic3").hide();
    });*/


});

</script>
</body>

</html>