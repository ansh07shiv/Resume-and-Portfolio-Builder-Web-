<?php
if(isset($_POST['btn_register'])){
    
           define('DB_SERVER', 'localhost');
           define('DB_USERNAME', 'root');
           define('DB_PASSWORD', '');
           define('DB_DATABASE', 'test');
           $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
            if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
	    $name=$_POST['name'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];
        $emailid=$_POST['emailid'];
        
        $sql = "INSERT INTO user (name, emailid, password, mobile) VALUES ('$name', '$emailid', '$password', '$mobile')";

        if (mysqli_query($db, $sql)) {
            header("Location: \Complete Website\Front\index.php");
        } 
        else {
               echo "Error";
            }
        
    
}
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
  <!-- Content here -->
       
      <p class="font-weight-bold" style="
                                         
    text-align: center;
    font-size: 59px;
    padding-top: 40px;
                                         ">Create an Account</p>

      <form  action="" method="POST" style="padding: 100px; text-align: center; padding-top:11px">
  <div class="form-group">
      
      
    <label for="exampleInputEmail1" style="padding-top: 18px; font-weight: 600; ">Full Name</label>  
    <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
      
      
    <label for="exampleInputEmail1" style="padding-top: 18px; font-weight: 600; ">Email address</label>
    <input type="email" class="form-control" name="emailid" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
         
          
<label for="exampleInputEmail1" style="padding-top: 18px; font-weight: 600; ">Mobile number</label>  
    <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile" required>  
          
          
          
    <label for="exampleInputPassword1" style="padding-top: 18px; font-weight: 600; ">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  <div class="form-check" style="padding-top:23px">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" required>
      All the information are true to my knowledge!
    </label>
  </div>
 <button type="submit" name="btn_register" class="btn btn-danger">Get Started</button>
</form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>