<?PHP
	session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo $_SESSION['name']; ?> | <?php echo $_SESSION['speciality']; ?> | <?php echo $_SESSION['emailid'];?></title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>
   <!-- Header
   ================================================== -->
   <header id="home" style="
                            position: relative;
   height: 800px;
   min-height: 500px;
   width: 100%;
   background: #161415 url(wall.jpg) no-repeat top center;
   background-size: cover !important;
	-webkit-background-size: cover !important;
   text-align: center;
   overflow: hidden;
                            ">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Hello, I am <?php echo ' '.$_SESSION['name']; ?>.</h1>
            <?php if(isset($_SESSION['user_desc'])){?><h3><?php echo $_SESSION['user_desc'];}?>Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            
         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p><?php if(isset($_SESSION['about_me']))echo $_SESSION['about_me'];?>
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span><?php echo $_SESSION['name']; ?> </span><br>
						   
						   <span><?php echo $_SESSION['mob']; ?> </span><br>
                     <span><?php echo $_SESSION['emailid']; ?> </span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                    
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">
            <?php if(isset($_SESSION['about_me'])){
                  for( $i=0; $i<count($_SESSION['ed']); $i++ ){?>
            <div class="row item">
               
               <div class="twelve columns">
                  
                  <h3><?php echo $_SESSION['ed'][$i]['ed_level'];?></h3>
                  <p class="info"><?php if($_SESSION['ed'][$i]['ed_degree']!=null){
                                        echo $_SESSION['ed'][$i]['ed_degree'].' in '.$_SESSION['ed'][$i]['ed_field']; ?><span>&bull;<?php }?></span>From <em class="date"><?php echo $_SESSION['ed'][$i]['ed_start'];?></em> To 
                                        <em class="date"><?php echo $_SESSION['ed'][$i]['ed_last'];?></em></p>

                  <p>
                  Completed <?php echo ' '.$_SESSION['ed'][$i]['ed_level'];?> from <?php echo ' '.$_SESSION['ed'][$i]['ed_boarduni'];?>and gained the valuabele knowledge from <?php echo ' '.$_SESSION['ed'][$i]['ed_institute'];?>. <br> I scored <?php echo ' '.$_SESSION['ed'][$i]['ed_grade'];?><?php if($_SESSION['ed'][$i]['ed_grade']<=10){
                      echo ' CGPA';
                    }
                    else
                      echo ' Percentage';?>
                  </p>

               </div>

            </div> <!-- item end -->
            <?php }}?>


         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <?php   if(isset($_SESSION['exp'])){
                    for( $i=0; $i<count($_SESSION['exp']); $i++ ){?>
            <div class="row item">
               
               <div class="twelve columns">
                  
                  <h3><?php echo $_SESSION['exp'][$i]['exp_organ'];?></h3>
                  <p class="info">From <em class="date"><?php echo $_SESSION['exp'][$i]['exp_start'];?></em> To 
                                        <em class="date"><?php echo $_SESSION['exp'][$i]['exp_end'];?></em></p>

                  <p>
                  <?php echo $_SESSION['exp'][$i]['exp_detail'];?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quis, neque earum sint architecto. Ipsa similique recusandae, provident incidunt ex, voluptatum blanditiis molestiae autem veniam est perspiciatis id! Quod, ad.
                  </p>

               </div>

            </div> <!-- item end -->
            <?php }}?>

             <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <?php if(isset($_SESSION['skill'])){?>
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            

				<div class="bars">
                    <?php   
                            for( $i=0; $i<count($_SESSION['skill']); $i++ ){?>
				   <ul class="skills">
					   <li><span class="bar-expand photoshop" style="width: <?php $percent=$_SESSION['skill'][$i]['skill_rating']*100; echo $percent;?>;"></span><em><?php echo $_SESSION['skill'][$i]['skill_name'];?></em></li>
					</ul>
                    <?php }}?>
				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->
    
     <?php if(isset($_SESSION['project_row'])){?>
        <div class="row work" id="works">

         <div class="three columns header-col">
            <h1><span>Projects</span></h1>
         </div>
         <div class="nine columns main-col">
             <?php 
                foreach($_SESSION['project_row'] as $project){
             ?>
             <div class="row item">
                 <div class="twelve columns">
                     <h3><?php echo $project['project_title'];?></h3>
                     <p><?php echo $project['project_detail'];?></p>
                     <strong>You can visit my project at </strong><a href="<?php echo $project['project_link'];?>"><?php echo $project['project_link'];?></a>
                 </div>
             </div>
             <?php }}?>
         </div>
       </div>
       
       <?php if(isset($_SESSION['training_row'])){?>
       <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Trainings</span></h1>
         </div>
         <div class="nine columns main-col">
             <?php 
                foreach($_SESSION['training_row'] as $training){
             ?>
             <div class="row item">
                 <div class="twelve columns">
                     <h3><?php echo $training['training_title'];?></h3>
                     <p><?php echo $training['training_detail'];?></p>
                 </div>
             </div>
             <?php }}?>
         </div>
       </div>
   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->



   <!-- Call-To-Action Section
   ================================================== -->


   <!-- Testimonials Section
   ================================================== -->
   

   <!-- Contact Section
   ================================================== -->
   
   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            

            <ul class="copyright">
               <li>&copy; Online Resume and Portfolio Builder</li>
                
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>
