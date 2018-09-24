<?php
require_once("config.php");

function isLoggedIn()
{
	if (isset($_SESSION['Username'])) {
		return true;
	}else{
		return false;
	}
}
?>