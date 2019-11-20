<?php

include 'mysql.php';
$id = $_GET['value'];

$sql = "select * from unapp_phase2";
$query = mysqli_query($con,$sql);
while($result = mysqli_fetch_array($query)){
  $id = $result['case_id'];
  $suspect = $result['suspect'];
  $desc = $result['description'];
  $location=$result['arrest_location'];


  $sql2 = "insert into phase_2(case_id,suspect,description,arrest_location) values('$id','$suspect','$desc','$location')";
  $query2 = mysqli_query($con,$sql2);

  $sql3 = "update case_details set investigation_status = 'phase-2' where case_id = '$id'";
  $query3 = mysqli_query($con,$sql3);

  if($query2 && $query3)
  {
    $sql11 = "delete from unapp_phase2";
    $query11 = mysqli_query($con,$sql11);
    echo "<script> alert('report Has been approved')  </script>";
    echo "<script>  window.location = 'dutymgmt.php' </script>";
    
  }
}






 ?>
