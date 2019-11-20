<?php
include 'mysql.php';

$name = $_GET['value'];

$sql = "delete from officer_profile where fname = '$name'";
$query  = mysqli_query($con,$sql);

if($query){
    echo "<script> alert('deleted') </script>";
    echo "<script> window.location = 'edit_officer_test.php' </script>";
    
}
else{
    echo "<script> alert('something is wrong') </script>";
}






?>