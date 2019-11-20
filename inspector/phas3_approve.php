<?php
include 'mysql.php';
$id = $_GET['value'];

$sql3= "select * from  unapp_phase3";
$query3 = mysqli_query($con,$sql3);

$result3 = mysqli_fetch_array($query3);
$caseid = $result3['case_id'];
$released = $result3['released_for_court'];
$verdict = $result3['court_verdict'];
$govt = $result3['govt_attorney'];
$suspect = $result3['suspect_attorney'];
$judge = $result3['Judge'];



$sql4 = "insert into phase3(case_id,released_for_court,court_verdict,govt_attorney,suspect_attorney,Judge) values('$caseid','$released','$verdict','$govt','$suspect','$judge')";
$query4 = mysqli_query($con,$sql4);

$sql5 = "update case_details set investigation_status = 'phase-3' where case_id = '$caseid'";
$query5 = mysqli_query($con,$sql5);
if($query4 && $query5){
  $sql10 = "delete from unapp_phase3";
  $query10 = mysqli_query($con,$sql10);
  echo "<script>  alert('phase 3 approved') </script>";
  echo "<script>  window.location = 'un_rep.php' </script>";
}

 ?>
