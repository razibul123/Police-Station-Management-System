<?php

session_start();
session_unset();
session_destroy();
ob_start();
header("location:inspector_login.php");
ob_end_flush(); 
include 'inspector_login.php';
//include 'home.php';
exit();

?>