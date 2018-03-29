<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="images/favicon.ico">
	
	<title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style>
.container {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
  max-width: 300px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

</style>
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1" style="
				background-color: #387DC2;
			">
				<h1 class="site-title"><a href="\Complete Website\Front\index.php"><em class="fa"></em>Resume and Online Portfolio Builder</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.php" style="text-align: center;"><em class="fa fa-dashboard"></em> Create Resume <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="\Complete Website\Dashboard\index.php" style="text-align: center;"><em class="fa fa-clone"></em>Go to Your Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="\Complete Website\ResumeFront\index.php" style="text-align: center;"><em class="fa fa-calendar-o"></em>What is a Resume !</a></li>
					<li class="nav-item"><a class="nav-link" href="\Complete Website\Front\contact.php" style="text-align: center;"><em class="fa fa-bar-chart"></em>Contact us</a></li>
				
					
				</ul>
				</nav>
			
			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Choose a Template</h1>
					</div>
					
					<div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 6px; b">
                            Username
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="\Complete Website\Front\index.php">Home!</a>
                            <a class="dropdown-item" href="#">logout</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="\Complete Website\Front\contact.html">Contact Us</a>
                          </div>
                        </div>

                                            <div class="clear"></div>
                                        </header>
                                        <div class="col col-md-6">
                                <div class="row">
                                    <div class="container">
                                      <a type="button" data-toggle="modal" data-target="#exampleModalLong">
                          <img src="img/cv_template_03.jpg" alt="Avatar"  class="image">
                        </a>

                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Template Preview</h5>
                                                <form action="ResumeTemplates/srt.php" method="post"><input type="submit" class="btn btn-primary" value="Generate Preview" name="generate"></form>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                 <center><img src="img/cv_template_03.jpg" alt="Avatar"></center>  

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                
                
                
                 <div class="col col-md-6">
                                <div class="row">
                                    <div class="container">
                                      <a type="button" data-toggle="modal" data-target="#exampleModalLong1">
                          <img src="temp2.jpg" alt="Avatar"  class="image">
                        </a>

                                        <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Template Preview</h5>
                                                <form action="ResumeTemplates/vijay/template3.php" method="post"><input type="submit" class="btn btn-primary" value="Generate Preview" name="generate"></form>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                 <center><img src="temp2.jpg" alt="Avatar"></center>  

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

				
				
								
								
								
								
								
											
							

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
	    window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
