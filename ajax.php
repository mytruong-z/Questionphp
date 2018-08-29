<?php require_once 'config.php';


$response = "SELECT * from nasa";
$a = $conn->query($response);
$i = 1;
$right_answer=0;
$wrong_answer=0;
$unanswered=0;
while( $result = $a-> fetch_assoc()){
	if ($result['answer']==$_POST["$i"]){
		$right_answer++;
	} else if($_POST["$i"]==5){
		$unanswered++;
	} else {
		$wrong_answer++;
	}
	$i++;
}
echo "<div id='answer'>";
echo "Số lần đúng : <span class = 'hightlight'>".$right_answer."</span><br>";
echo "Số lần sai : <span class='hightlight'>".$wrong_answer."</span><br>";
echo "Số câu hỏi không trả lời : <span class='hightlight'>".$unanswered."</span><br>";
echo "</div>";
?>