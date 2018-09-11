<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "quiz";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
mysqli_set_charset($connect,'utf8');
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $connect->connect_error);
    exit();
}
$id          = $_POST['id'];
$question       = $_POST['question_name'];
$answer1       = $_POST['answer1'];
$answer2     = $_POST['answer2'];
$answer3     = $_POST['answer3'];
$answer4     = $_POST['answer4'];
$answer     = $_POST['answer'];

//Code xử lý, update dữ liệu vào table dựa theo điều kiện WHERE tại id = 1
$sql = "UPDATE nasa SET question='$question', answer1='$answer1', answer2='$answer2', answer3= '$answer3', answer4='$answer4', answer='$answer' WHERE id=$id";

if ($connect->query($sql) === TRUE) {
    //Nếu kết quả kết nối thành công, trở về trang view.
    header('Location: table.php');
} else {
    //Nếu kết quả kết nối không được thì trở về update.php đồng thời gán giá trị error=1, dựa theo giá trị này trang update.php có thể thông báo lỗi cần thiết.
    header('Location: update.php?error=1');
}

//Đóng kết nối database tintuc
$connect->close();