
<!DOCTYPE hmtl>
<html>
<head>
  <title>Form Sign Up</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<div class="form">
       
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
       
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
           
          <form action="signup.php" method="post">
            <?php include('errors.php'); ?>
           
           
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" name="First_Name"  placeholder="First name*"/>
            </div>
         
            <div class="field-wrap">
              <input type="text" name="Last_Name" placeholder="Last name*"/>
            </div>
          </div>
          <div class="field-wrap">
           <input  type="text" name="Username"  placeholder="User name*"/>
          </div>
 
          <div class="field-wrap">
           <input type="text" name="Email" placeholder="Email*"/>
          </div>
           
          <div class="field-wrap">
           <input type="password" name="Password" placeholder="Set A Password*"/>
          </div>
          <button type="submit" class="button button-block"/>Get Started</button>
           
          </form>
 
        </div>
         
        <div id="login">   
          
        </div>
         
      </div><!-- tab-content -->
       
</div> <!-- /form -->
</html>