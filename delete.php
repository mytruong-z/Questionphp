<?php require_once 'config.php';?>

<?php 
		$id = $_GET['id'];
		$DelSql = "DELETE FROM nasa WHERE id=$id";
		$res = mysqli_query($conn,$DelSql);
		if($res){
			header('location: table.php');
		}else {
			echo "Failed to delete";
		}

?>