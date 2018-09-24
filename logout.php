<?php include('config.php'); ?>

<?php
session_start();
unset($_SESSION['Username']);
session_destroy();

header("Location: login.php");
exit;
?>



            