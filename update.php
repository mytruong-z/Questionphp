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

//Lấy dữ liệu từ view.php bằng phương thức GET.
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql     = "SELECT * FROM nasa WHERE id='$id'";
    $ket_qua = $connect->query($sql);
    
    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
        $question     = $row['question_name'];
        $answer1       = $row['answer1'];
        $answer2       = $row['answer2'];
        $answer3     = $row['answer3'];
        $answer4     = $row['answer4'];
        $answer     = $row['answer'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form site add question</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <style>
        form {
            padding-top: 20px;
            padding-bottom: 80px;
            text-align: center;
            font-size: 30px;
            color: black;
        }
        
        input {
            width: 400px;
            height: 40px;
            font-size: 30px;
        }
        
        h1 {
            color: black;
            font-weight: bold
        }
    </style>
</head>
<!-- Truyền dữ liệu vào form. -->
<body>
    <form action="process.php" method="post">
        <h1>EDIT QUESTION</h1>
        ID : <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php echo $id; ?><br><br> Question : <input type="text" name="question" value="<?php echo $question; ?>"><br><br> Answer1 : <input type="text" name="answer1" value="<?php echo $answer1; ?>"><br><br> Answer2 : <input type="text" name="answer2" value="<?php echo $answer2; ?>"><br><br>       
        Answer3 : <input type="text" name="answer3" value="<?php echo $answer3; ?>"><br><br> Answer4 : <input type="text" name="answer4" value="<?php echo $answer4; ?>"><br><br> Answer : <input type="number" min="1" max="4" name="answer" value="<?php echo $answer; ?>">
        <h3>(Please input "Answer" from 1 to 4)</h3><br>
        <button type="submit" class="btn btn-success btn-lg">EDIT</button>
    </form>
</body>
<?php 
    } //Đóng vòng lặp while.
} //Đóng câu lệnh if.

//Đóng kết nối database tintuc
$connect->close();
?>