<?php 
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']: '';
if(!empty($sessData['status']['msg'])){
	$statusMsg=$sessData['status']['msg'];
	$statusMsgType=$sessData['status']['type'];
	unset($_SESSION['sessData']['status']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>resetPassword</title>
	<link rel="stylesheet" type="text/css" href="css/forgot.css">
</head>
<body>
	<h2>Thiết lập lại mật khẩu cho tài khoản của bạn</h2>
	<?php echo !empty($statusMsg)? '<p class=" '.$statusMsgType.'">'.$statusMsg.'</p>':'';?>
	<div class="container">
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="password" name="password" placeholder="PASSWORD" required="">
				<input type="password" name="confirm_password" placeholder="CONFIRM PASSWPRD" required="">
				<div class="send-button">
					<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
					<input type="submit" name="resetSubmit" value="RESET PASSWORD">
				</div>
			</form>
		</div>
	</div>
</body>
</html>