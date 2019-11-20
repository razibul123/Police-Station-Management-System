<?php

session_start();
session_unset();
session_destroy();
ob_start();
header("location:public_user_login.php");
ob_end_flush(); 
include 'public_user_login.php';
//include 'home.php';
exit();

?>