<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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


.panel-group {
  padding-top: 50px;
}
.panel-default {
  border-radius: 0;
  border: none;
  background: none;
  margin-bottom: 0;
  padding-bottom: 14px;
}
.panel-default > .panel-heading {
  border: none;
  background: none;
  padding: 0;
}
.panel-default > .panel-heading + .panel-collapse .panel-body {
  border: none;
  padding: 0 0 0 32px;
}
.panel-default h5 {
  font: 300 19px "Open Sans", Arial, sans-serif;
  padding: 0;
  margin: 0 0 5px;
}
.panel-group .panel+.panel {
  margin-top: 15px;
}
.panel-default .accordion-toggle:before {
  content: "";
  width: 21px;
  height: 21px;
  display: inline-block;
  background: #e54a1a url(http://keenthemes.com/assets/bootsnipp/toggle-icons.png) no-repeat 6px 10px;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
  top: 4px;
}
.panel-default .collapsed:before {
  background: #495764 url(http://keenthemes.com/assets/bootsnipp/toggle-icons.png) no-repeat 6px -148px;
}
.panel-default .panel-title:hover .collapsed:before {
  background-color: #e54a1a;
}
.panel-default .accordion-toggle,
.panel-default .accordion-toggle:focus,
.panel-default .accordion-toggle:hover,
.panel-default .accordion-toggle:active {
  color: #1ea9e3;
  text-decoration: none;
}
.panel-default .collapsed {
  color: #5f6f7e;
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
    <div class="container-fluid" style = "text-align:center;color:#42c5f4;">
    <div class="panel-group" id="accordion1" >
            <div class="panel panel-default" >
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Q1:What is crime</a>
                </h5>
              </div>
              <div id="accordion1_1" class="panel-collapse collapse in">
                <div class="panel-body" >
                <p>Ans: crime is an unlawful act punishable by a state or other authority</p>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Q2:What is felony</a>
                </h5>
              </div>
              <div id="accordion1_2" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Ans: A crime which is referred as a serious crime</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Q3:What to do when you see anything which violates law?</a>
                </h5>
              </div>
              <div id="accordion1_3" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Ans:Just contact the Nearby police station</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Q4:What is crime</a>
                </h5>
              </div>
              <div id="accordion1_4" class="panel-collapse collapse">
                <div class="panel-body">
                <p>Ans: crime is an unlawful act punishable by a state or other authority</p>
                </div>
              </div>
            </div>


          </div>

    </div>
    </div>
  </div>
</body>
</html>
