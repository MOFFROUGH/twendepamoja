<?php 
session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['user']);
unset($_SESSION['userid']);
header("Location:index.php");
exit;
?>