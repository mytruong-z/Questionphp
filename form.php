
<!DOCTYPE html>
<html>
<head>
	<title>Form site add question</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jsforex.js"></script>
	<style>
		form{
			padding-top:  20px;
			padding-bottom: 80px;
			text-align:  center;
			font-size: 30px;
			color: black;
		}
		input{width: 400px;
			height: 40px;
			font-size: 30px;}
		h1{color: black;font-weight: bold}
	</style>
</head>
<body>
	<form action="connect.php" method="post">
		<h1>ADD QUESTION</h1>
		Question : <input type="text" name="question_name"><br><br>
		Answer1 : <input type="text" name="answer1"><br><br>
		Answer2 : <input type="text" name="answer2"><br><br>
		Answer3 : <input type="text" name="answer3"><br><br>
		Answer4 : <input type="text" name="answer4"><br><br>
		Answer : <input type="number" name="answer"><br><br>
		<input id="submit" type="submit" value="SUBMIT" style="background-color: red;width: 200px">
		
	</form>
</body>
</html>