<?php require_once 'config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Question</title>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jsforex.js"></script>
</head>
 
<body class="style-body">


<div class="container">
	<a href="user.php" class="log-in" >Sign Up</a>
	<a href="#" class="log-in" >Log In</a>
	
	
</div>

<h1>Bạn có đủ thông minh để trở thành nhà du hành vũ trụ của NASA không?</h1>

<form method='post' id='quiz_form'>
<?php
$response="SELECT * from nasa";

$a = $conn->query($response);

while( $result = $a-> fetch_assoc()) {

	
	$test = json_encode('a'); 

 ?>

<div id="question_<?php echo $result['id'];?>" class='questions' data-question="<?php echo htmlentities($test, ENT_QUOTES, 'UTF-8'); ?>" data-question-id="<?=$result['id']?>" data-answer="<?=$result['answer']?>">
<div id="quiz">

<h2 id="question_<?php echo $result['id'];?>"><?php echo $result['id'].".".$result['question_name'];?></h2>
<div class='align'>
<label id='ans1_<?php echo $result['id'];?>' for='1'>
<input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' class="input" name='<?php echo $result['id'];?>'>
	<?php echo $result['answer1'];?></label>
<br/>

<label id='ans2_<?php echo $result['id'];?>' for='1'><input type="radio" value="2" id='radio2_<?php echo $result['id'];?>' class="input" name='<?php echo $result['id'];?>'>
	<?php echo $result['answer2'];?></label>
<br/>

<label id='ans3_<?php echo $result['id'];?>' for='1'><input type="radio" value="3" id='radio3_<?php echo $result['id'];?>' class="input" name='<?php echo $result['id'];?>'>
	<?php echo $result['answer3'];?></label>
<br/>

<label id='ans4_<?php echo $result['id'];?>' for='1'><input type="radio" value="4" id='radio4_<?php echo $result['id'];?>' class="input" name='<?php echo $result['id'];?>'>
	<?php echo $result['answer4'];?></label>
<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
	


</div>
<div style="display: none" id="answerfor_<?php echo $result['id'];?>" class="answerm"><?php echo $result['answer'];?></div>

</div>


<br/>

<input type="button" id='prev' value='Prev!' name='buttonPrev' class='buttPrev butt'/>
<input type="button" id='next' value='Next!' name='buttonNext' class='buttNext butt'/> <br> 
<input type="button" id='submit' value='Sub!' name='buttonSub' class='buttSub butt'/>

</div>

<?php }?>
</form>
	<div id="results">
		<h3 id ="num"></h3>
	</div>
    <div id="score"></div>
    

</body>
</html>