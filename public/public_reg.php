<?php

$fnameErr = $lnameErr = $zipErr =$passErr = $emailErr =  $numberErr =  "";

 ?>


<!DOCTYPE html>
<html>
<head>
<title>Police Station Management System</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
            <a class="nav-link" href="lnews.php">LatestNews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_most_wanted1.php">MostWantedPeopleList</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="public_reg.php">Sign up
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="public_user_login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid" style = "text-align:center;">
      <?php

               include 'mysql.php';

               if(isset($_POST['submit'])){

      $fname = test_input($_POST['fname']);
      $lname = test_input($_POST['lname']);
      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);

      $address = test_input($_POST['address']);
      $city = test_input($_POST['city']);
      $zip = test_input($_POST['zip']);
      $phone = test_input($_POST['ph_number']);
      $email = test_input($_POST['email_address']);


//fname and lname errors

if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
       $fnameErr = "Only letters allowed";
     }

     if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
       $lnameErr = "Only letters  allowed";
     }

     if(strlen($password)>8 || strlen($password)<8){
       $passErr = "Password length has to be eight";
     }
//zip validation
if(strlen($zip)<4 ||strlen($zip)>4){
  $zipErr = "Invalid zip code";
}


//email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

//number errors

if(strlen($phone)>3){

    $number1 = str_split($phone);
    $operator  = "";

    if(strlen($phone)<11 || strlen($phone)>11){

        for($i=0;$i<3;$i++){
            $operator = $number1[$i].$operator;
            if($operator !="016" || $operator !="017" || $operator !="018" || $operator !="019")
            {

            }

            }
            $numberErr = "invalid number";

    }


}
else{
    $numberErr = "invalid format";
}


if(empty($fnameErr) && empty($lnameErr) && empty($passErr) && empty($zipErr) && empty($numberErr) && empty($emailErr)){
  $sql = "insert into public_account(firstname,lastname,username,password,address,city,zip,phoneNumber,EmailAddress,user_id,pic) values('$fname','$lname','$username','$password','$address','$city','$zip','$phone','$email','','')";
  $query = mysqli_query($con,$sql);

  if($query){
    $sql2 = "insert into public_user(username,password,email,address) values ('$username','$password','$email','$address')";
    $query2 = mysqli_query($con,$sql2);
  if($query2){
    echo "<script>  alert('user created') </script>";
    echo "<script>  window.location = 'index_page.php' </script>";
  }

  }
}



               }

               function test_input($data) {
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
               }

                           ?>
            <div class="well">
              <h2>User registration form</h2>
              <form method = "POST" action = "">
            					<div class="col-sm-12">
            						<div class="row">
            							<div class="col-sm-4 form-group">
            								<label>First Name</label>
            								<input type="text" name = "fname" placeholder="Enter First Name Here.." class="form-control" required> <br>
                            <span style = "color:red;" ><?php echo $fnameErr; ?></span>
            							</div>
            							<div class="col-sm-4 form-group">
            								<label>Last Name</label>
            								<input type="text" name = "lname" placeholder="Enter Last Name Here.." class="form-control" required> <br>
                            <span style = "color:red"><?php  echo $lnameErr; ?></span>
            							</div>
                          <div class="col-sm-4 form-group">
                            <label>username</label>
                            <input type="text" name = "username" placeholder="Enter Last Name Here.." class="form-control" required>
                          </div>
            						</div>
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>Password</label>
                            <input type="password" name = "password" placeholder="Enter Password here.." class="form-control" required> <br>
                            <span style = "color:red;"><?php echo $passErr; ?></span>
                          </div>

                        </div>
            						<div class="form-group">
            							<label style = "text-style :bold;">Address</label>
            							<textarea placeholder="Enter Address Here.." name = "address" rows="3" class="form-control" required></textarea>
            						</div>
            						<div class="row">
            							<div class="col-sm-4 form-group">
            								<label>City</label>
            								<input type="text" name = "city" placeholder="Enter City Name Here.." class="form-control" required>
            							</div>

            							<div class="col-sm-4 form-group">
            								<label>Zip</label>
            								<input type="number" name = "zip" placeholder="Enter Zip Code Here.." class="form-control" required> <br>
                            <span style = "color:red;"><?php echo $zipErr; ?></span>
            							</div>
            						</div>

            					<div class="form-group">
            						<label>Phone Number</label>
            						<input type="number" name = "ph_number" placeholder="Enter Phone Number Here.." class="form-control" required> <br>
                        <span style = "color:red"><?php echo $numberErr ?></span>
            					</div>
            					<div class="form-group">
            						<label>Email Address</label>
            						<input type="text" name = "email_address" placeholder="Enter Email Address Here.." class="form-control" required> <br>
                        <span style = "color:red"> <?php echo $emailErr; ?></span>
            					</div>

            					<input type="submit" name="submit" value="submit" class = "btn btn-success">
            					</div>
            				</form>




            </div>

    </div>
  </div>
</body>
</html>
