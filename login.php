<?php 

session_start();

require_once 'permission.php';
if (isLoggedIn()) {
  header ('location:table.php');

}
          
          require_once("config.php");
          // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
          if (isset($_POST["buttlog"])) {
            // lấy thông tin người dùng
           
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];

            //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
            //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
            $Username = strip_tags($Username);
            $Username = addslashes($Username);
            $Password = strip_tags($Password);
            $Password = addslashes($Password);
            if ($Username == "" || $Password =="") {
              echo "username hoặc password bạn không được để trống!";
            }else{
              $sql = "SELECT * from user where Username = '$Username' and Password = '$Password' ";
              $query = mysqli_query($conn,$sql);
              $num_rows = mysqli_num_rows($query);
              if ($num_rows==0) {
                echo "Tên đăng nhập hoặc mật khẩu không đúng !";
              }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['Username'] = $Username;
                $_SESSION['Password'] = $Password;
                    // Thực thi hành động sau khi lưu thông tin vào session

                     //   require_once "permission.php";
                       header('Location: table.php');
                       
              }
            }
          }
        ?>

<!DOCTYPE hmtl>
<html>
<head>
  <title>Form đăng ký</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="form" >
       
      <ul class="tab-group">
         <li class="tab active"><a href="login.php">Log In</a></li>
        <li class="tab "><a href="formSignup.php">Sign Up</a></li>
       
      </ul>
       
     
        <div id="login">   
          <h1>Welcome Back!</h1>
           
          <form action="login.php" method="POST">
            
           
            <div class="field-wrap">
           <input type="text" name="Username" required placeholder="Username*" id="Username"/>
          </div>
           
          <div class="field-wrap">
            <input type="password" name="Password" required placeholder="Password*" id="Password" />

          </div>
           
          
           <lable> <input class="inputcheck" type="checkbox" name="remember" value="remember">Ghi Nhớ</lable>

          
                
          <button name="buttlog" class="button button-block"/>Log In</button>
 
        </form>
 
        </div>
         
      </div><!-- tab-content -->
       
</div> <!-- /form -->
</body>
</html>






