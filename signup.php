<?php
  session_start();
  

  $First_Name = filter_input(INPUT_POST,'First_Name');
  $Last_Name = filter_input(INPUT_POST,'Last_Name');
  $Username = filter_input(INPUT_POST,'Username');
  $Email = filter_input(INPUT_POST,'Email');
  $Password = filter_input(INPUT_POST,'Password');
  
 
           
              $host = "localhost";
              $dbusername = "root";
              $dbpassword = "";
              $dbname = "quiz";
            
              //creat connection
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
              mysqli_set_charset($conn,'utf8');


              if (mysqli_connect_error()) {
                die('Connec error('. mysqli_connect_error().') '
                  . mysqli_connect_error());
              }
              else{
                $sql = "INSERT INTO user (First_Name,Last_Name,Username,Email,Password)
                values ('$First_Name','$Last_Name','$Username','$Email','$Password')";
                 $user_check_query = "SELECT * FROM user WHERE Username='$Username' OR Email='$Email' LIMIT 1";
                  $result = mysqli_query($conn, $user_check_query);
                  $user = mysqli_fetch_assoc($result);
                  
                  if ($user) { // if user exists
                    if ($user['Username'] === $Username) {
                      echo '<script language="javascript">alert("Tên người dùng này đã được sử dụng. Vui lòng nhập tên khác !!!"); window.location="formSignup.php";</script>';
                    } else {
                        if ($conn->query($sql)){
                      echo '<script language="javascript">alert("Chúc mừng bạn đã đăng ký thành công !!!"); window.location="login.php";</script>';
                    }
                    else {
                      echo "Error: " .$sql ."<br>".$conn->error;
                    }
                    $conn->close();

                    }
                
              }
            }
           
  


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 /* $db = mysqli_connect('localhost', 'root', '', 'quiz'); */
 





?>

