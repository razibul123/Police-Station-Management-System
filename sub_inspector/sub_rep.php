<?php
include 'mysql.php';
session_start();
 $complinee = $_SESSION['complainee'];
$id = $_SESSION['id'];
if(isset($_POST['submit'])){
  $suspect = $_POST['suspect'];
  $desc = $_POST['desc'];
  $location = $_POST['location'];

  $sql = "insert into unapp_phase2(case_id,suspect,description,arrest_location,complainee_id) values ('$id','$suspect','$desc','$location','$complinee')";
  $query = mysqli_query($con,$sql);


  if($query){
    echo "<script> alert('phase 2 report submitted')  </script>";
    echo "<script> window.location = 'assgn_case.php'  </script>";
  }
}


 ?>
