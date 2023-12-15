<?php

include 'config.php';

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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/hhh.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choosing Reader's Gold can allow you to purchase the
            best selling books which are being written by some of the most popular authors.
            Apart from the numerous advantages of choosing us, 
            some of the most important ones are being mentioned below:-</p>
         <ul style="list-style-type:disc;">
            <li>Books available at affordable prices.</li>
            <li>Attractive discounts on different books.</li>
            <li>Facility of comparing the book price with the market value.</li>
            <li>Cash on Delivery facility available.</li>
            <li>Free Home Delivery facility available.</li>
         </ul>
            
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title1">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/2.jpg" alt="">
         <p>Hey folks, in love with such neat and clean website interface. Easy to find books and various payment options available. Absolutely true to their words "Delivered hand picked books on my door-step".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pratick</h3>
      </div>

      <div class="box">
         <img src="images/1.jpg" alt="">
         <p>Hello boys, I'm a Taliban member from Afghanistan, I have ordered "The mind of the Terrorist by J.M Post" but i didn't get it yet. How long will it take?..Do you guys even deliver here ? xD xD</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sujoruddin Khilji</h3>
      </div>

      <div class="box">
         <img src="images/7.jpg" alt="">
         <p>I'm ML shingne from SIT lonavala. Happy to see such great website by students of our college.
         You filled my chest with air and you guys have made me proud. You guys made me feel awwww *can see my reaction on photo* .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Favda shingne</h3>
      </div>

      <div class="box">
         <img src="images/3.jpg" alt="">
         <p>ये Reader's Gold वालो ने ऐसी system बनाई है की एक तरफ से ऑर्डर जाएगी और दुसरे साइड से बुक डिलीवर होगी |</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pappu Gandhi</h3>
      </div>

      <div class="box">
         <img src="images/5.jpg" alt="">
         <p>नमस्ते मित्रो! में नरेंद्र दामोदरदास मोदी भारत का प्रधानमंत्री सारी जनता को शुचिता करना चाहता हूं की ये वेबसाइट सबसे उत्तम है।</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Narendra moody</h3>
      </div>

      <div class="box">
         <img src="images/8.jpg" alt="">
         <p>Nice website and nice books in them. When font is large I read , when is font is not large I cant read I avoid but book is interesting I cant avoid therefore I reading it for haurs and haurs. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Phunsukh Lungdu</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>
      <div class="box-container">
         <div class="box">
            <img src="images/a1.jpeg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Preeti Shenoy</h3>
         </div>

         <div class="box">
            <img src="images/a2.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Robert Kiyosaki</h3>
         </div>

         <div class="box">
            <img src="images/a3.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Chetan Bhagat</h3>
         </div>

         <div class="box">
            <img src="images/a6.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>JK Rowling</h3>
         </div>

         <div class="box">
            <img src="images/a5.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Anupam Kher</h3>
         </div>

         <div class="box">
            <img src="images/a4.jpeg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Amitav Ghosh</h3>
         </div>

      </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>