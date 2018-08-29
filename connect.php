<?php
	$question_name = filter_input(INPUT_POST,'question_name');
	$answer1 = filter_input(INPUT_POST,'answer1');
	$answer2 = filter_input(INPUT_POST,'answer2');
	$answer3 = filter_input(INPUT_POST,'answer3');
	$answer4 = filter_input(INPUT_POST,'answer4');
	$answer = filter_input(INPUT_POST,'answer');
	if(!empty($question_name)) {
		if (!empty($answer1)){ 
			if(!empty($answer2)){ 
				if(!empty($answer3)){
					if(!empty($answer4)){
						if(!empty($answer)){
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
								$sql = "INSERT INTO nasa (question_name,answer1,answer2,answer3,answer4,answer)
								values ('$question_name','$answer1','$answer2','$answer3','$answer4','$answer')";
								if ($conn->query($sql)){
									echo "New question is inserted sucessfully";
								}
								else {
									echo "Error: " .$sql ."<br>".$conn->error;
								}
								$conn->close();
							}
		}
		else{
			echo "answer should not be empty";
		}
		}
		else{
			echo "answer4 should not be empty";
		}
		}
		else{
			echo "answer3 should not be empty";
		}
		}
		else{
			echo "answer2 should not be empty";
		}
		}
		else{
			echo "answer1 should not be empty";
			die();
		}
	}
	else {
		echo "question should not be empty";
		die();
	}




?>