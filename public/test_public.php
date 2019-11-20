<?php

session_start();
if(isset($_SESSION['username'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
<?php
include 'mysql.php';

$username = $_SESSION['username'];
$sql = "select * from public_account where username = '$username'";
$query = mysqli_query($con,$sql);
$result = mysqli_Fetch_array($query);
$fname = $result['firstname'];
$lname = $result['lastname'];
$address = $result['address'];
$city = $result['city'];
$phone = $result['phoneNumber'];
$email = $result['EmailAddress'];

?>

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



			</form>
			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Hello <?php  echo "$fname.&nbsp;.$lname"; ?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="edit_public_user.php">Edit_profile</a></li>

							<li class="divider"></li>
							<li><a href="public_logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="show_case.php">show cases</a></li>

			</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
              public panel
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
<?php

}
else{
	echo "<script> alert('You need to login first') </script>";
	echo "<script> window.location = 'public_user_login.php' </script>";
}
?>
