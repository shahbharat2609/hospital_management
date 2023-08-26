<script type="text/javascript">

 function date()
 {
  alert(" Date can't be less than current date");

  window.location="index.php";
}

</script>
<?php

$conn = mysqli_connect('localhost','root','','Hospital_db') or die('connection failed');

if(isset($_POST['submit'])){

    $_POST = array_filter($_POST);

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $curr= strtotime("now") * 1000;
   $times1 =  strtotime($date) * 1000;
   if($curr>=$times1)
   {
    echo '<script type="text/javascript"> date();</script>';
   }
   
   else 

   
 {
session_start();
$_SESSION["name"]=$name;
$_SESSION["email"]=$email;
$_SESSION["number"]=$number;
$_SESSION["date"]=$date;

header("Location: payment.php");
 }
exit();
 
  
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCare </title>
    <!-- favicon link -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="icon" href="favicon.ico">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> MedCare </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
        <a href="Login.html">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>Your health is our concern!</p>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons h-effect">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons h-effect">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons h-effect">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons h-effect">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box effect">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

        <div class="box effect">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

        <div class="box effect">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

        <div class="box effect">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

        <div class="box effect">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

        <div class="box effect">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Since 2022, MedCare has earned a reputation for being one of the leading health care providers in India. Committed to many more years of excellence, our highly trained, board-certified staff are here to pave the way for quality treatment and care as soon as you walk through our doors.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container" >

        <div class="box effect">
            <img src="image/doc-1.jpg" alt="">
            <h3>Dr. Mandeep Josan</h3>
            <span>Urologist</span>
           
        </div>

        <div class="box effect">
            <img src="image/doc-2.jpg" alt="">
            <h3>Dr. Harpreet Tomar</h3>
            <span>Cardiovascular Surgeon</span>
           
        </div>

        <div class="box effect">
            <img src="image/doc-3.jpg" alt="">
            <h3>Dr. Sourabh Sharma</h3>
            <span>Neurologist</span>
        </div>

        <div class="box effect">
            <img src="image/doc-4.jpg" alt="">
            <h3>Dr. Pawan Sharma</h3>
            <span>Psychiatrist</span>
           
        </div>

        <div class="box effect">
            <img src="image/doc-5.jpg" alt="">
            <h3>Dr. Amrit Singh</h3>
            <span>Internist</span>
            
        </div>

        <div class="box effect">
            <img src="image/doc-6.jpg" alt="">
            <h3>Dr. Pankaj Rathore</h3>
            <span>Gynaecologist</span>
           
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row ">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
      <input type="text" name="name" placeholder="enter your name" autocomplete="off" class="box" required>
      <input type="email" name="email" placeholder="enter your email" autocomplete="off" class="box" required>
      <input type="number" name="number" placeholder="enter your number" autocomplete="off" class="box" required>
      <input type="date" name="date" class="box" autocomplete="off" required>
      <input type="submit" value="make appointment" name="submit" class="btn">
   </form>  

    </div>

</section>

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box effect">
            <img src="image/pic-1.png" alt="">
            <h3>Sahil Sharma</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Recently visited health check up department of MedCare Hospital for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services.</p>
        </div>

        <div class="box effect">
            <img src="image/pic-2.png" alt="">
            <h3>Anamika Thakur</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The care and hospitality is very incredible besides healty treatment , tests & consultations for my father. I highly recommend everyone to visit the hospital. Thank you.</p>
        </div>

        <div class="box effect">
            <img src="image/pic-3.png" alt="">
            <h3>Akash Mittal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">I recently found myself under your care for a cardiac issue. While there, accompanied by my wife, we found that the entire staff at MedCare Hospital was exceedingly professional and efficient, from your E.R. receptionists to the cardiac care team. You should be proud of your outstanding staff and service.</p>
        </div>

    </div>

</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> reviews </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#services"> <i class="fas fa-chevron-right"></i> free checkups </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> 24/7 ambulance </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> expert doctors </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> medicines </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> bed facility </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone-alt"></i> +91-12345-98765 </a>
            <a href="#"> <i class="fas fa-phone-alt"></i> +91-98765-12345 </a>
            <a href="#"> <i class="fas fa-envelope"></i> johdoe@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> dummymail@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/?lang=en"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/?hl=en"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://in.linkedin.com/"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://in.pinterest.com/"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"><i class="fas fa-copyright"></i> Copyright 2022 <span>MedCare</span></div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>