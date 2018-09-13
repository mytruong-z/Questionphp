<?php include('server.php') ?>

<!DOCTYPE hmtl>
<html>
<head>
	<title>Form đăng ký</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="form">
       
      <ul class="tab-group">
        <li class="tab active"><a href="signup.php">Sign Up</a></li>
        <li class="tab"><a href="login.php">Log In</a></li>
      </ul>
       
     
        <div id="login">   
          <h1>Welcome Back!</h1>
           
          <form action="login.php" method="post">
          	<?php include('errors.php');?>
           
            <div class="field-wrap">
           <input type="text" placeholder="Email*"/>
          </div>
           
          <div class="field-wrap">
            <input type="text" placeholder="Password*"/>
          </div>
           
          <p class="forgot"><a href="#">Forgot Password?</a></p>
           
          <button class="button button-block"/>Log In</button>
          <p> 
          	Not yet a member? <a href="signup.php">Sign up</a>
          </p>
           
          </form>
 
        </div>
         
      </div><!-- tab-content -->
       
</div> <!-- /form -->
</body>
</html>
