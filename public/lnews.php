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
ul.timeline {
  list-style-type: none;
  position: relative;
}
ul.timeline:before {
  content: ' ';
  background: #d4d9df;
  display: inline-block;
  position: absolute;
  left: 29px;
  width: 2px;
  height: 100%;
  z-index: 400;
}
ul.timeline > li {
  margin: 20px 0;
  padding-left: 20px;
}
ul.timeline > li:before {
  content: ' ';
  background: white;
  display: inline-block;
  position: absolute;
  border-radius: 50%;
  border: 3px solid #22c0e8;
  left: 20px;
  width: 20px;
  height: 20px;
  z-index: 400;
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
            <h2>Police management system</h2>
            <hr>
            <div class="row">
    		<div class="col-md-12">
    			<h4>Latest News</h4>
<hr>
    			<ul class="timeline">
            <?php

            include 'mysql.php';
            $sql = "select * from news";
            $query = mysqli_query($con,$sql);
            $count = mysqli_num_rows($query);
            if($count==0){
                echo "<h3> No latest News Available </h3>";
            }
            else{
                while($result = mysqli_fetch_array($query)){
                    $id = $result['id'];
                    $title = $result['title'];
                    $sub = $result['sub'];
                    $full = $result['full'];
                    $date = $result['date'];
        
            

             ?>
    				<li>
    					<a target="_blank" href="#"><?php echo $title; ?></a>
    					<a href="#" class="float-right"><?php echo $date; ?></a>
    					<p><?php echo $sub; ?>....</p>
    				</li>

<?php
}
            }
 ?>


    			</ul>
    		</div>
    	</div>
     
    </div>
  </div>
</body>
</html>