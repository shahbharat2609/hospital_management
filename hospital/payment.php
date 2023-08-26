<script type="text/javascript">
 function yes()
 {
   
 alert("Appointment Booked");
  window.location="index.php";
 
}
 function no()
 {
  alert("Invalid");
  window.location="index.php";
}
</script>

<?php

$conn = mysqli_connect('localhost','root','','Hospital_db') or die('connection failed');

if(isset($_POST['submit'])){
    $cn = mysqli_real_escape_string($conn, $_POST['cn']);
    $em = mysqli_real_escape_string($conn, $_POST['em']);
    $ey = $_POST['ey'];
    $cv = $_POST['cv'];
    if($cn=="12345678"and$em=="6"and$ey="30"and $cv="420")
    {

    
session_start();
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$number =$_SESSION["number"];
$date=$_SESSION["date"];


$insert = mysqli_query($conn, "INSERT INTO `contact`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
   echo '<script>yes();</script>'; 
   $to_email = $email;
   $subject = 'Appointment';
   $message = 'Hello '.$name.' Your appointment has been booked for date '.$date;
   $headers = 'From: noreply @ company . com';
   mail($to_email,$subject,$message,$headers);  

   session_destroy();

}
else{
    echo '<script>no();</script>';
     
}  
}
?>
<html lang="en">
    <head>

        <title>Payments</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
       
    <!-- custom css file link  --> 
    <link rel="stylesheet" href="css/paycss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
     
    </head>
<div class="box" style="border:.3rem solid #16a085;">  
<h1 class="heading"> <span>Payment</span> gateway</h1> 
<div class="container">
    <div class="rows">
        <div class="col-xs-12 col-md-4" style="margin-left: 350px;margin-right: auto; margin-top: 100px;">
            <div class="panel panel-default">
                <div class="panel-heading bg-success" style="background-color:#16a085; color:white;">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    
                </div>
                <div class="panel-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cn" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expiryMonth">
                                    EXPIRY DETAILS</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" name="em" id="expiryMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" name="ey"id="expiryYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" name="cv" id="cvCode" placeholder="CV" required />
                               
                                <input type="submit" value="Pay ₹ 500 " name="submit" class="btn">
                            
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>
</div> 
</html>
