<?php require_once 'config.php';?>

<?php 
session_start();
//unset($_SESSION['msg']); di
 
  ?>
  <?php require_once 'permission.php';
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
  ?>

<!DOCTYPE html>
<html>


<head>
<title>Table-Question</title>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
table, th, td {
    border: 2px solid black;
    text-align:center;
}


</style>
</head>
 
<body>
  <div class="container">
  <button style="float: right;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modallogout">LOG OUT</button></div>
<h1 class="h1">QUESTION LIST</h1>
<div class="container">
    <a class="btn btn-danger co-ma-a" href="form.php">Add Question</a>
    
<table class ="table" method='post'>
<tr>
    <th>ID</th>
    <th>Question</th>
    <th>Answer1</th>
    <th>Answer2</th>
    <th>Answer3</th>
    <th>Answer4</th>
    <th>Answer</th>
    <th>Edit</th>
    <th>Delete</th>
<?php
$response="SELECT * from nasa";

$a = $conn->query($response);
while( $result = $a-> fetch_assoc()) {  
    $test = json_encode('a'); 
?>
<tr>
<td class="col-lg-1"><?php echo $result['id'];?></td>
<td id="question_<?php echo $result['id'];?>"><?php echo $result['question_name'];?></td>
<td id='ans1_<?php echo $result['id'];?>' for='1' value="1" id='radio1_<?php echo $result['id'];?>' class="input col-lg-1.5" name='<?php echo $result['id'];?>'>
    <?php echo $result['answer1'];?></td>


<td id='ans2_<?php echo $result['id'];?>' for='1' value="2" id='radio2_<?php echo $result['id'];?>' class="input col-lg-1.5" name='<?php echo $result['id'];?>'>
    <?php echo $result['answer2'];?></td>


<td id='ans3_<?php echo $result['id'];?>' for='1' value="3" id='radio3_<?php echo $result['id'];?>' class="input col-lg-1.5" name='<?php echo $result['id'];?>'>
    <?php echo $result['answer3'];?></td>


<td id='ans4_<?php echo $result['id'];?>' for='1' value="4" id='radio4_<?php echo $result['id'];?>' class="input col-lg-1.5" name='<?php echo $result['id'];?>'>
    <?php echo $result['answer4'];?></td>


<td id='ans5_<?php echo $result['id'];?>' for='1' value="5" id='radio4_<?php echo $result['id'];?>' class="input col-lg-1" name='<?php echo $result['id'];?>'>
    <?php echo $result['answer'];?></td> 
      
<td><a  href="update.php?id=<?php echo $result['id'];?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
          
    <td>
               <button type="button" class="btn btn-info btn-md co-del" data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>">Delete</button>
     
              <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $result['id']; ?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete File</h4>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a href="delete.php?id=<?php echo $result['id']; ?>"><button type="button" class="btn btn-danger "> Yes..! Delete</button></a>
                      </div>
                    </div>
                    
                  </div>
                </div>
                 <!-- Modal log-->
                <div class="modal fade" id="modallogout" role="dialog">
                                  <div class="modal-dialog">
                                  
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Warning</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you want to log out?</p>
                                      </div>
                                      <div class="modal-footer">
                                        <a href="table.php"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></a>
                                        <a href="logout.php"><button type="button" name ="logout" class="btn btn-info "> Yes</button></a>
                                        
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
            </td>
   
</tr>



   

<?php }?>
</tr>
</table>
</diV>
<body>

  