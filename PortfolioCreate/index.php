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
                    <li class="nav-item"><a class="nav-link active" href="index.php" style="text-align: center;"><em class="fa fa-dashboard"></em> Create the Portfolio <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="\Complete Website\Dashboard\index.php" style="text-align: center;"><em class="fa fa-clone"></em>Go to Your Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="\Complete Website\PortfolioFront\index.php" style="text-align: center;"><em class="fa fa-calendar-o"></em>What is a Portfolio !</a></li>
                      <li class="nav-item"><a class="nav-link" href="experience.php" style="text-align: center;"><em class="fa fa-hand-o-up"></em>Some amazing portfolios</a></li>
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
                            Options
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="\Complete Website\Front\index.php">Home!</a>
                            <a class="dropdown-item" href="\Complete Website\Dashboard\index.php" >Profile</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="\Complete Website\Front\contact.php">Contact Us</a>
                          </div>
                        </div>

    <div class="col-lg-8" style="padding-top: 120px; padding:83px">
            <div class="container">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
  <img src="img/Screenshot%20(96).png" alt="Avatar" class="image">
</a>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                 <div class="modal-header btn-dark">
                <h5 class="modal-title" id="exampleModalLabel">Template Preview</h5>
                <form action="PortfolioTemplates/ceevee/index.php" method='post'><input type="submit" class="btn btn-primary" name='generatePortfolio' value="Generate Portfolio">
                     </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="img/Screenshot%20(96).png" alt="First slide">
                        </div>
                        
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
              </div>
            </div>

        </div>
                    </div>
                    
                    
                    
                <div class="col-lg-8" style="padding-top: 120px; padding:83px">
            <div class="container">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg1">
  <img src="temp2.jpg" alt="Avatar" class="image">
</a>

            <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                 <div class="modal-header btn-dark">
                <h5 class="modal-title" id="exampleModalLabel">Template Preview</h5>
                <form action="PortfolioTemplates/ceevee1/index.php" method='post'><input type="submit" class="btn btn-primary" name='generatePortfolio' value="Generate Portfolio">
                     </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="temp2.jpg" alt="First slide">
                        </div>
                        
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
              </div>
            </div>

        </div>
                    </div>
                                               

				<div class="col-lg-8" style="padding-top: 120px; padding:83px">
            <div class="container">
              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg2">
  <img src="temp3.jpg" alt="Avatar" class="image">
</a>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                 <div class="modal-header btn-dark">
                <h5 class="modal-title" id="exampleModalLabel">Template Preview</h5>
                <form action="PortfolioTemplates/ceevee2/index.php" method='post'><input type="submit" class="btn btn-primary" name='generatePortfolio' value="Generate Portfolio">
                     </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="temp3.jpg" alt="First slide">
                        </div>
                        
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
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
