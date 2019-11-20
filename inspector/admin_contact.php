<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  
  body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
  
  </style>
</head>
<body>

<div class="container contact-form">
            <div class="contact-image">
                <img src="http://oilseeds.dac.gov.in/assets/img/UserLogin.jpg" alt="rocket_contact"/>
            </div>
            <form method="post" action  = "">
                <h3>Having a problem contact System Admin</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Your First Name *" value="" required/>
                        </div>
                              <div class="form-group">
                            <input type="text" name="lname" class="form-control" placeholder="Your Last Name *" value=""  required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value=""  required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" placeholder="Your Id *" value="" required/>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                        
                            <input type="submit" name="submit" class="btnContact" value="Send Message" />
                       
                    </div>
                   
                </div>
            </form>


            <?php

             include 'mysql.php';
             
             if(isset($_POST['submit'])){

echo $fname = $_POST['fname'];
echo $lname = $_POST['lname'];
echo $email = $_POST['email'];
echo $id = $_POST['id'];
echo $msg = $_POST['txtMsg'];



$sql = "insert into admin_contact(firstname,lastname,id,email,msg) values ('$fname','$lname','$id','$email','$msg')";
$query = mysqli_query($con,$sql);

if($query)
{

echo  "<script>  alert('msg sent')  </script>";
echo "<script>  window.location = 'inspector_login.php'  </script>";

}

             }



?>
</div>

</body>
</html>