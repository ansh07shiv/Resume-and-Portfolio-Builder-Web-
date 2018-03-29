<?php
session_start();
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'test');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if(isset($_POST['update_ed'])){

        $ed_level=$_POST['ed_level'];
        $ed_detail=$_POST['ed_detail'];
        $ed_start=$_POST['ed_start'];
        $ed_last=$_POST['ed_last'];
        
        $ed_boarduni=$_POST['ed_boarduni'];
        $ed_institute=$_POST['ed_institute'];
        $ed_grade=$_POST['ed_grade'];
        $ed_field=$_POST['ed_field'];
        
        
        $id = $_SESSION['id'];
        $sql = "INSERT INTO education (id, ed_level, ed_detail, ed_start, ed_last, ed_grade, ed_boarduni, ed_institute, ed_field) VALUES ('$id', '$ed_level', '$ed_detail', '$ed_start', '$ed_last', '$ed_boarduni', '$ed_institute', '$ed_grade', '$ed_field')";

        if (mysqli_query($db, $sql)) {
            echo "Success";
        } else {
            echo mysqli_error($db);
        }
    }
    
        $id = $_SESSION['id'];
        $query = "select * from education where id='$id'";
        //echo $query;
        $query_run = mysqli_query($db,$query);
        //echo mysql_num_rows($query_run);
        if($query_run)
        {
            $i=-1;
            while($row = mysqli_fetch_array($query_run,MYSQLI_ASSOC)){
                $i++;
                $edurow[$i]= $row;
                $_SESSION['ed'] = $edurow;
            }
            $num_edrow=$i;
        }
        else
        {
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
        }


     
?>

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
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1" style="
				background-color: #387DC2;
			">
				<h1 class="site-title"><a href="/Complete Website/Front/index.php"><em class="fa"></em>Resume and Online Portfolio Builder</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php" style="text-align: center;"><em class="fa fa-dashboard"></em> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="info.php" style="text-align: center;"><em class="fa fa-clone"></em>Basic Informations </a></li>
					<li class="nav-item"><a class="nav-link active" href="educational.php" style="text-align: center;"><em class="fa fa-calendar-o"></em>Educational Details<span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="experience.php" style="text-align: center;"><em class="fa fa-bar-chart"></em>Expiriences and Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="skills.php" style="text-align: center;"><em class="fa"></em>Skills</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php" style="text-align: center;"><em class="fa fa-hand-o-up"></em>About</a></li>
					<li class="nav-item"><a class="nav-link" href="projects.php" style="text-align: center;"><em class="fa fa-clone"></em>Projects</a></li>
				</ul>
				</nav>
			
			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-left">Educational Details</h1>
					</div>
					
					<div class="card" style="width: 80%;">
                <div class="card-block">
                    <h4 class="card-title btn btn-dark" style="width: 100%">Educational Information</h4>
                    <ul class="list-group">
                        <div class="list-group">
                            <?php
                    #echo $_SESSION['ed'][$i]['ed_level'];
                    $i=0;
                    while($i<=$num_edrow){
                ?>
                                <button type="button" class="list-group-item list-group-item-action">
                
                   <strong style="padding-right:10px"><?php echo $edurow[$i]['ed_level'];?></strong><br><?php
                        
                    if($edurow[$i]['ed_degree']!=null){
                    echo $edurow[$i]['ed_degree'].' in '.$edurow[$i]['ed_field']; ?><br><?php }
                    echo 'From '.$edurow[$i]['ed_start'].' to '.$edurow[$i]['ed_last'];?><br><?php
                    echo 'University/Board: '.$edurow[$i]['ed_boarduni'];?><br><?php
                    echo 'Institute: '.$edurow[$i]['ed_institute'];?><br><?php
                    echo 'CGPA/Percentage: '.$edurow[$i]['ed_grade'];?><br><?php
                    echo 'Details: '.$edurow[$i]['ed_detail'];
                    $i=$i+1;
                    }
                ?>
                </button>

                        </div>
                    </ul>
                    <br>
                    <center><button class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg1">Add Education</button></center><br>

                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="container">

                                    <div class="card card-register mx-auto mt-5">
                                        <div class="card-header">
                                            Add Your Education
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post" style="padding: 20px; text-align: center">
                                                 <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlSelect1">Select your Major</label>
                                                        <select class="form-control" name="ed_level" id="exampleFormControlSelect1">
                                                          <option>PhD</option>
                                                          <option>Post Graduation</option>
                                                          <option>Graduation</option>
                                                           <option>Diploma</option>
                                                            <option>Higher Secondary</option>
                                                          <option>Secondary</option>
                                                         
                                                        </select>
                                                      </div>
                                                
                                                       
                                                
                                                   <div class="row" style="padding: 10px; padding-bottom: 18px;">
                                                        <div class="col">
                                                          <input type="text" name="ed_start" class="form-control" placeholder="Start Year">
                                                        </div>
                                                        <div class="col">
                                                          <input type="text" name="ed_last" class="form-control" placeholder="End Year">
                                                        </div>
                                                      </div>
                                                
                                                <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlTextarea1">University/Board</label>
                                                        <input class="form-control" type="text" name="ed_boarduni" placeholder="University/Board">
                                                      </div>
                                                
                                                <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlTextarea1">Institute</label>
                                                        <input class="form-control" type="text" name="ed_institute" placeholder="Name of the Institute">
                                                      </div>
                                                
                                                 <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlTextarea1">Score</label>
                                                        <input class="form-control" type="text" name="ed_grade" placeholder="CGPA/Grade/Percentage">
                                                      </div>
                                                
                                                <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlTextarea1">Field</label>
                                                        <input class="form-control" type="text" name="ed_field" placeholder="CS/EE/IT ... etc">
                                                      </div>
                                                
                                                
                                                 <div class="form-group" style="padding: 10px">
                                                        <label for="exampleFormControlTextarea1">Details</label>
                                                        <textarea class="form-control" name="ed_detail" id="exampleFormControlTextarea1" rows="3" placeholder="Any extra Information you want to add !"></textarea>
                                                      </div>
                                                
                                                
                                                <div class="form-check" style="padding: 10px">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" required class="form-check-input">
                                                          All the above information is true to my knowledge
                                                        </label>
                                                      </div>
                                                    <button type="submit" name="update_ed" class="btn btn-danger">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
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
