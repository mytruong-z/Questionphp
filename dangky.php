<?php
    $username = filter_input(INPUT_POST,'username');
    $first_name = filter_input(INPUT_POST,'first_name');
    $last_name = filter_input(INPUT_POST,'last_name');
    $pass = filter_input(INPUT_POST,'pass');
    $email = filter_input(INPUT_POST,'email');
        if (!empty($username)){ 
            if(!empty($first_name)){ 
                if(!empty($last_name)){
                    if(!empty($pass)){
                        if(!empty($email)){  
                            //Kiểm tra email đã có người dùng chưa
                            
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
                                $sql = "INSERT INTO user (Username,First_Name,Last_Name,Password,Email)
                                values ('$username','$first_name','$last_name','$pass','$email')";
                                $user_check_query = "SELECT * FROM user WHERE Username='$username' OR Email='$email' LIMIT 1";
                                $result = mysqli_query($conn, $user_check_query);
                                $user = mysqli_fetch_assoc($result);
                                
                                  if ($user['Username'] === $username) {
                                    echo "Tên người dùng này đã được sử dụng";
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
              
        else{
            echo "Email should not be empty";
        }
        }
        else{
            echo "Password should not be empty";
        }
        }
        else{
            echo "Last name should not be empty";
        }
        }
        else{
            echo "First name should not be empty";
        }
        }
        else{
            echo "username should not be empty";
            die();
        }
?>