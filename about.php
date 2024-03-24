<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At Our Grocery Shop, we prioritize quality, variety, and service. With fresh products, helpful staff, and a focus on cleanliness, we provide a superior shopping experience. Visit us today and see the difference!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>At Our Grocery Shop, we provide a wide selection of fresh vegetables, ripe fruits, quality cereals, and assorted grams and pulses, ensuring you have all the ingredients you need for a healthy diet.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I've been using this online grocery service for months now, The prices are competitive, and the customer service team is responsive and helpful.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aarush</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>This online grocery service is a game-changer! This online grocery service has made my life so much easier. platform make shopping a breeze.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dhruvi</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Highly recommend! This online grocery platform has made my life easier with its user-friendly interface and top-notch customer service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vihaan</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Five stars all the way! From the seamless ordering process to the prompt delivery, this online grocery service exceeds expectations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Niharika</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Love this service! Quality products, great selection,easy to use and convenient delivery make it my go-to for all my grocery needs.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Advik</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Exceptional experience! This online grocery service has everything I need and more. Easy ordering, timely delivery, and top-quality products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Niyati</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>