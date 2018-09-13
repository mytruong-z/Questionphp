<?php 
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root', '','quiz');
if (isset($_POST['user'])) {
	$First_Name = mysqli_real_escape_string($db,$_POST['First_Name']);
	$Last_Name = mysqli_real_escape_string($db,$_POST['Last_Name']);
	$Username = mysqli_real_escape_string($db,$_POST['Username']);
	$Email = mysqli_real_escape_string($db,$_POST['Email']);
	$Password = mysqli_real_escape_string($db,$_POST['Password']);


	if(empty($First_Name)) {array_push($errors, "FirstName is required");}
	if(empty($Last_Name)) {
		array_push($errors,"LastName is required");
	}
	if(empty($Username)) {
		array_push($errors,"Username is required");
	}
	if(empty($Email)) {
		array_push($errors,"Email is required");
	}
	if(empty($Password)) {
		array_push($errors,"Password is required");
	}


	$user_check_query = "SELECT * FROM user WHERE Username='$Username' OR Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $Username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO user (First_Name, Last_Name, Username,Email,Password) 
  			  VALUES('$First_Name','$Last_Name','$Username', '$Email', '$Password')";
  	mysqli_query($db, $query);
  	$_SESSION['Username'] = $Username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}




// LOGIN USER
if (isset($_POST['login_user'])) {
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($Username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($Password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$Password = md5($Password);
  	$query = "SELECT * FROM user WHERE Username='$U' AND Password='$Password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['Username'] = $Username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>