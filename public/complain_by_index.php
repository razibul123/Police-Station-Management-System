<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="main.js"></script>
    <script>
    
    $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  var options={
    format: 'mm/dd/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
  };
  date_input.datepicker(options);
})
    
    </script>
    <style>
    
    body{background:#f9f9f9;}
#wrapper{padding:90px 15px;}
.navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
.card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
.header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
@media(min-width:992px) {
#wrapper{margin-left: 200px;padding: 90px 15px 15px;}
.navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:0;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
}
    </style>
</head>
<body>
   
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav">
          <li class="nav-item">
            <a class="nav-link" href="index_page.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ctype.php">Crime types</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_lost_people.php">LostPeopleList</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         

        </ul>
      </div>
    </nav>
  
  	<div class="col-lg-12 well">
  <h3 style = "margin-left:300px;">Complaint form </h3>
  <form method = "POST" action = "">
  					<div class="col-sm-12">
            
  						<div class="row">
  							<div class="col-sm-6 form-group">
  								<label>First Name</label>
  								<input type="text" name = "fname" placeholder="Enter First Name Here.." class="form-control" required>
  							</div>
  							<div class="col-sm-6 form-group">
  								<label>Last Name</label>
  								<input type="text" name = "lname" placeholder="Enter Last Name Here.." class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group">
  							<label>Address</label>
  							<textarea placeholder="Enter Address Here.." name = "address" rows="3" class="form-control" required></textarea>
  						</div>
  						<div class="row">
  							<div class="col-sm-4 form-group">
  								<label>City</label>
  								<input type="text" name = "city" placeholder="Enter City Name Here.." class="form-control" required>
  							</div>
  							
  							<div class="col-sm-4 form-group">
  								<label>Zip</label>
  								<input type="text" placeholder="Enter Zip Code Here.." name = "zip" class="form-control"required>
  							</div>
  						</div>
              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Date of the incedent</label>
                <input width = "200px"class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" required/>
              </div>

  					
  					<div class="form-group">
  						<label>Phone Number</label>
  						<input type="text" name = "ph_number" placeholder="Enter Phone Number Here.." class="form-control" required>
  					</div>
  					<div class="form-group">
  						<label>Email Address</label>
  						<input type="text" name = "email" placeholder="Enter Email Address Here.." class="form-control" required>
  					</div>
  					<div class="form-group">
  						<label>Incident Location</label>
  						<input type="text" name  = "incident_location" placeholder="Enter Website Name Here.." class="form-control" required>
  					</div>
            <div class="form-group">
              <label>Complaint details</label>
              <textarea placeholder="Enter Address Here.." name = "comp_details" rows="3" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Desired Outcome</label>
              <input type="text" placeholder="Enter Website Name Here.."  name = "desired_outcome" class="form-control" required>
            </div>
  					<input  style = "margin-left:450px;" type="submit" name  = "submit" class = "btn btn-success" value = "SUBMIT COMPLAINT">
  					</div>
  				</form>
  				</div>
  	</div>
     
    
  </div>
</body>
</html>



<?php
include 'mysql.php';
try{
    if(isset($_POST['submit'])){
 

       echo  $fname = $_POST['fname'];
        echo $lname = $_POST['lname'];
        echo $email = $_POST['email'];
        echo $address = $_POST['address'];
        echo $city = $_POST['city'];
        echo $zip = $_POST['zip'];
        echo $doi = $_POST['date'];
        echo $ph_number = $_POST['ph_number'];
        echo $details  =$_POST['comp_details'];
        echo $incident_location = $_POST['incident_location'];
        echo $desired_outcome = $_POST['desired_outcome'];
        echo $status  = "unassigned";
        
        
        $sql = "insert into complain_form(id,fname,lname,email,Address,city,zip,Doi,phone_number,incident_location,complaint_details,Desired_outcome,status) values ('','$fname','$lname','$email','$address','$city','$zip','$doi','$ph_number','$incident_location','$details','$desired_outcome','$status')";
        $query = mysqli_query($con,$sql);
        
        if($query){
            echo '<script>alert("form submitted")</script>';
        }
        else{
            echo '<script>alert("something wrong")</script>';
        }
        
        
        }
}
catch(Exception $e){
    echo 'message'.$e->getMessage();
}


?>