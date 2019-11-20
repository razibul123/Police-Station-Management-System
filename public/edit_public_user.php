
<?php
include 'mysql.php';
session_start();
$username = $_SESSION['username'];
$sql = "select * from public_account where username = '$username'";
$query = mysqli_query($con,$sql);
$result = mysqli_Fetch_array($query);
$id = $result['user_id'];
$fname = $result['firstname'];
$lname = $result['lastname'];
$address = $result['address'];
$city = $result['city'];
$phone = $result['phoneNumber'];
$email = $result['EmailAddress'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

  h1.page-header {
    margin-top: -5px;
}

.sidebar {
    padding-left: 0;
}

.main-container {
    background: #FFF;
    padding-top: 15px;
    margin-top: -20px;
}

.footer {
    width: 100%;
}
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



			
			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Hello <?php  echo "$fname.&nbsp;.$lname"; ?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
		
							<li><a href="./index.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="show_case.php">show cases</a></li>

			</ul>
		</div>
		<div class="col-md-10 content">


                <div class="panel-body">



 <div class="col-md-10 ">

<div class="panel panel-default" style = "margin-left:200px;">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">

    <div class="box box-info">

            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" ></div>
                <!--Upload Image Js And Css-->







                     </div>

              <br>

              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo  $fname.$lname; ?> </h4></span>
              <span><p></p></span>
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


<div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $fname; ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>




<div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7">   <?php echo $lname;  ?>  </div>
  <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >User Id</div><div class="col-sm-7">   <?php echo $id;  ?>  </div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Address</div><div class="col-sm-7"><?php echo $address;  ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >City</div><div class="col-sm-7"><?php  echo $city; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phone number</div><div class="col-sm-7"><?php echo $phone; ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email Address</div><div class="col-sm-7"><?php  echo $email; ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>



            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>



    </div>
</div>










                </div>
            </div>
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12 text-center">
				<hr class="divider">
			</p>
		</footer>
	</div>
</body>
</html>
