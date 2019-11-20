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
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important

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
            <a class="nav-link" href="ctype.php">Complain</a>
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
            <a class="nav-link" href="#">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="public_reg.php">Sign up
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
          
        </ul>
         
        </ul>
      </div>
    </nav>
    <div class="container-fluid" >
           <div class = "row">
           <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="personal.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title" style = "text-align:middle;"><a href="product.html" title="View Product">Personal crime</a></h4>
                            <p class="card-text">A violent crime or crime of violence is a crime in which an offender or perpetrator uses or threatens to use force upon a victim. This entails both crimes in which the violent act is the objective, such as murder or rape, as well as crimes in which violence is the means to an end. Violent crimes may, or may not, be committed with weapons. Depending on the jurisdiction, violent crimes may vary from homicide to harassment. Typically, violent criminals includes aircraft hijackers, bank robbers, muggers, burglars, terrorists, carjackers, rapists, kidnappers, torturers, active shooters, murderers, gangsters, drug cartels, and others.</p>
                            <div class="row">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                   <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="burglar2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Property crime</a></h4>
                            <p class="card-text">Property crime is a category of crime that includes, among other crimes, burglary, larceny, theft, motor vehicle theft, arson, shoplifting, and vandalism. Property crime is a crime to obtain money, property, or some other benefit. This may involve force, or the threat of force, in cases like robbery or extortion. Since these crimes are committed in order to enrich the perpetrator they are considered property crimes. Crimes against property are divided into two groups: destroyed property and stolen property. When property is destroyed, it could be called arson or vandalism. Examples of the act of stealing property is robbery or embezzlement.</p>
                            <div class="row">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                   <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="felony.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Felony crime</a></h4>
                            <p class="card-text">The term felony, in some common law countries, is defined as a serious crime. The word originates from English common law (from the French medieval word "félonie"), where felonies were originally crimes involving confiscation of a convicted person's land and goods. Other crimes were called misdemeanors. Many common law countries have now abolished the felony/misdemeanor distinction and replaced it with other distinctions, such as between indictable offences and summary offences. A felony is generally considered a crime of high seriousness, but a misdemeanor is not.</p>
                            <div class="row">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
         
     
    </div>
    <div class = "footer">
        <center><div style = "margin-left:250px;" ><strong style = "color:red;">Saw something unwanted? </strong>  <br>    <button type="button" class="btn btn-danger"><a href="complain_by_index.php"> <h3>Complain</h3></a></button></center></div>
    </div>
  </div>
</body>
</html>