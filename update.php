<?php require_once 'config.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD Application - UPDATE Operation</title>
<meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/update.js"></script>
</head>
<body>

<?php
$id = $_GET['id'];
$response="SELECT * from nasa";

$a = $conn->query($response);

while( $result = $a-> fetch_assoc()) {

    
    $test = json_encode('a'); 

 ?>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h2>UPDATE Operation in CRUD Application</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Question</label>
                <div class="col-sm-10">
                  <input type="text" name="Question" value="<?php echo $result['question_name'];?>" class="form-control" id="input1" placeholder="Question" />
                </div>
            </div>
 
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Answer_1</label>
                <div class="col-sm-10">
                  <input type="text" name="ans_1" value="<?php echo $result['answer1'];?>" class="form-control" id="input1" placeholder="Answer_1" />
                </div>
            </div>
 
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Answer_2</label>
                <div class="col-sm-10">
                  <input type="text" name="ans_2" value="<?php echo $result['answer2'];?>"  class="form-control" id="input1" placeholder="Answer_2" />
                </div>
            </div>
 
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Answer_3</label>
                <div class="col-sm-10">
                  <input type="text" name="ans_3" value="<?php echo $result['answer3'];?>" class="form-control" id="input1" placeholder="Answer_3" />
                </div>
            </div>

             <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Answer_4</label>
                <div class="col-sm-10">
                  <input type="text" name="ans_4" value="<?php echo $result['answer4'];?>"  class="form-control" id="input1" placeholder="Answer_4" />
                </div>
            </div>
 
            <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Answer</label>
            <div class="col-sm-10">
                <select name="answer" class="form-control">
                    <option>Select Your Answer</option>
                    <option value="1" <?php if($result['answer'] == '1'){ echo "selected";} ?> >1</option>
                    <option value="2" <?php if($result['answer'] == '2'){ echo "selected";} ?> >2</option>
                    <option value="3" <?php if($result['answer'] == '3'){ echo "selected";} ?> >3</option>
                    <option value="4" <?php if($result['answer'] == '4'){ echo "selected";} ?> >4</option>
                   
                </select>
            </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
            <?php

                if(isset($_POST) & !empty($_POST)){
                    $question_name = mysql_real_escape_string($_POST['question_name']);
                    $answer1 = mysql_real_escape_string($_POST['answer1']);
                    $answer2 = mysql_real_escape_string($_POST['answer2']);
                    $answer3 = mysql_real_escape_string($_POST['answer3']);
                    $answer4 = mysql_real_escape_string($_POST['answer4']);
                    
                    $answer = $_POST['answer'];
                }

                $UpdateSql = "UPDATE `nasa` SET question_name='$query', answer1='$answer1', answer2='$answer2', answer3='$answer3', answer4='$answer4' WHERE id=$id";
                $res = mysqli_query($connection, $UpdateSql);
                if($res){
                    header('location: view.php');
                }else{
                    $fmsg = "Failed to update data.";
                }

                ?>


            <?php }?>
            <?php<  if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        </form>
    </div>
</div>
</body>
</html>
