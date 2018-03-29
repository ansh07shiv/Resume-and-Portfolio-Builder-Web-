<?PHP
session_start();
if(isset($_POST['create_pdf'])){
        require_once("tcpdf/tcpdf.php");
        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
          $obj_pdf->SetCreator(PDF_CREATOR);  
          $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
          $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
          $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
          $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
          $obj_pdf->SetDefaultMonospacedFont('helvetica');  
          $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
          $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
          $obj_pdf->setPrintHeader(false);  
          $obj_pdf->setPrintFooter(false);  
          $obj_pdf->SetAutoPageBreak(TRUE, 10);  
          $obj_pdf->SetFont('helvetica', '', 12);  
          $obj_pdf->AddPage(); 
          $content .= '</body>';  
          $obj_pdf->writeHTML($content);
          $obj_pdf->Output('sample.pdf', 'I'); 
    }
  if(isset($_SESSION['id'])){
 if(isset($_POST['generate']))
 {
?>

<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $_SESSION['name']; ?>|<?php echo $_SESSION['speciality']; ?>|<?php echo $_SESSION['email']; ?> </title>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/reset.css">
<!--[if lt IE 9]> 
	<link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link rel="stylesheet" media="screen and (max-width:480px)" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/cv.css">
<link rel="stylesheet" media="print" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/print.css">
</head>

<body>
	<!-- Header -->
	<header role="banner">
		<div class="container_16">
				<hgroup>
                    <h1><?PHP echo $_SESSION["name"]; ?></h1>
					<h2 style>email: <?php echo $_SESSION["emailid"]; ?></h2>
                    <h3><?php echo $_SESSION['mob']; ?></h3>
				</hgroup>

					<form action="" method="POST"><h3>
                            <input class="btn btn-warning" style="padding: 12px; margin-left: 35%"
                        type="submit" name="create_pdf" value="Generate PDF"></h3>
                        </form>
				
		</div>
	</header>
	
	<!-- Contact -->
	<section class="contactform clearfix">
		<div class="container_16">
			<h3>contact no.</h3>
			<p> <?php echo $_SESSION["mob"]; ?> 
			<br><em></em></p>
			
			
		</div>
		
	</section>
	
	<!-- Corps -->
	<section role="main" class="container_16 clearfix">
		<div class="grid_8 competences">
			<!-- Education -->
			<div class="grid_16 competences">
				<h3>Education</h3>
               <?php if(isset($_SESSION['ed'])){
				 for($i=0; $i<count($_SESSION['ed']); $i++) { ?>
                  
                    <div class="<?php if(i==count($_SESSION["ed"])-1) { 
                                   echo("job lost");  }
                                  else echo("job" ) ?> "></div>
                      <h4 style="font-weight:800">  <?php echo $_SESSION['ed'][$i]['ed_level'];?></h4>
								
								<p><?php echo $_SESSION['ed'][$i]['ed_detail'];?></p>
                        <p> <?php if($_SESSION['ed'][$i]['ed_degree']!=null){
                                        echo $_SESSION['ed'][$i]['ed_degree'].' in '.$_SESSION['ed'][$i]['ed_field']; }?></p>
                                <h4><?php echo 'University/Board: '.$_SESSION['ed'][$i]['ed_boarduni'];?><br><?php
                                          echo 'Institute: '.$_SESSION['ed'][$i]['ed_institute'];?><br><?php
                                          echo 'CGPA/Percentage: '.$_SESSION['ed'][$i]['ed_grade'];?><br></h4>
								<h4>From <?php echo $_SESSION['ed'][$i]['ed_start'];?> To <?php echo $_SESSION['ed'][$i]['ed_last'];?></h4>
								<p><?php echo $_SESSION['ed'][$i]['ed_detail'];?></p>
                       </div>
                    
               <?php }
                }?>
       </div>
            
    
            
			<!-- Skills -->
			<div class="grid_8 competences">
				<h3>Skills</h3>
				
					 <?php if(isset($_SESSION['skill'])){
                                  foreach($_SESSION['skill'] as $skill){?>
								<div class="talent">
									<h4><?php echo $skill['skill_name'];?></h4>
									<p><?php echo $skill['skill_rating'];?> out of 10</p>
                            </div>
                     <?php }}?>
				
			</div>
		
		
			<!-- Experiences -->
			<div class="grid_16 experiences">
				<h3>Experiences</h3>
				
                <?php for( $i=0; $i<count($_SESSION['exp']); $i++ ){?>
                <div class="<?php if($i==count($_SESSION['exp'])-1){
                                            echo("job last");}
                                        else echo("job");?>">
        
								<h4><?php echo $_SESSION['exp'][$i]['exp_organ'];?></h4>
								<h4>From <?php echo $_SESSION['exp'][$i]['exp_start'];?> To <?php echo $_SESSION['exp'][$i]['exp_end'];?></h4>
								<p><?php echo $_SESSION['exp'][$i]['exp_detail'];?></p>
							 </div>
                     <?php } ?>
              
					</div>
		

            <!--project-->

	        <div class="grid_16 project">
						<div class="yui-u first">
							<h3>Projects</h3>
						</div>
						<?php if(isset($_SESSION['project_row'])){
                                  for( $i=0; $i<count($_SESSION['project_row']); $i++ ){?>
						<div class="yui-u">
				            <div class="<?php if($i==count($_SESSION['project_row'])-1){
                                            echo("job last");}
                                        else echo("job");?>">
								<h4><?php echo $_SESSION['project_row'][$i]['project_title'];?></h4>
								<p>Duration <?php echo $_SESSION['project_row'][$i]['project_duration'];?></p>
								<p><?php echo $_SESSION['project_row'][$i]['project_detail'];?></p>
							</div>
							
						</div>
               	<?php }
                                 }?>
					</div><!--// .yui-gf -->
			<!-- Formations -->
			
		
			
		
			<!-- Contact -->
  

	</section>
         

<!-- Scripts JavaScript -->
<script src="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/jquery-1.js"></script>
<script src="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/validate.js"></script>
<!--[if lt IE 9]>
<script src="scripts/placeholder.js"></script>
<![endif]-->
<script src="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/plugins.js"></script>


</body></html>
<?php }
}else{
    header( "Location: /Complete Website/Front/index.php");
}?>