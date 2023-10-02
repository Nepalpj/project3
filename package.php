<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link  -->
     <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
    <!-- header section starts  -->
 <section class="header">

  <a href="home.php" class="logo"  style> car rent </a>
    

    

     <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
  </section>
    
  <!-- header section ends  -->  
   <!-- home section starts  -->

<section class="home">

<div class="swiper home-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(image/home1.jpg) no-repeat">
         <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around nepal</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
      </div>
      <div class="swiper-slide slide" style="background:url(image/home2.jpg) no-repeat">
         <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around nepal</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
      </div>
      

      <div class="swiper-slide slide" style="background:url(image/home3.jpg) no-repeat">
         <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
      </div>
      
   </div>

   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>

</div>

</section>


<!-- home section ends -->
  
   
  <!-- services section starts  -->
  <section class="services" id="services">

    <h1 class="heading">our special  package</h1>

    <div class="box-container">

        <div class="box">
           <i class="fa-solid fa-bullhorn">  RS 600</i>
            <h3>Pokhara</h3>
            <p>Pokhara’s tranquil beauty has been the subject of inspiration for many travel writers. Its pristine air, spectacular
                backdrop of snowy peaks, blue lakes and surrounding greenery make it ‘the jewel in the Himalaya’, a place of remarkable
                 natural disposition. With the magnificent Annapurna range forming the backdrop and the serenity of the Cluster of 9 Lakes
                  with three major ones - Phewa, Rupa and Begnas – Pokhara is a great destination for a weekend getaway as well as a long 
                  relaxing holiday. Pokhara Valley, gateway to the Annapurna region where many a trekker finds his Shangri-la, sits high on 
                  the list of ‘must visit’ places in Nepal.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
        <i class="fa-solid fa-bullhorn">  RS 5000</i>
            <h3>Mustang</h3>
            <p>Mustang is the hidden paradise on Earth. What is more, unexplored is their local lifestyle and culture. Thus, the next
                reason to visit Upper Mustang is the local tribes and their rich & unique culture. Lying on the border, Mustang flaunts 
                Tibetan influenced art and ancient history.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fa-solid fa-bullhorn">  RS 500</i>
            <h3>Manakamana</h3>
            <p>Manakamana is one of the best religious places in Nepal. Thousands of people come to worship the Manakamana temple every year.
                If you visit Manakamana and wish for something with their pure heart then the goddess will grant their wish.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        

        

    </div>

</section>





 <!-- footer section starts  -->
  <section class="footer">
     <div class="box-container">
        <div class="box">
         <h3>quick links</h3>
         <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"><i class="fas fa-angle-right"> </i>about</a>
         <a href="package.php"><i class="fas fa-angle-right"> </i>package</a>
         <a href="book.php"><i class="fas fa-angle-right"> </i>book</a>
         </div>

         <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +977 9803513457 </a>
         <a href="#"> <i class="fas fa-phone"></i> +977 9886161945 </a>
         <a href="#"> <i class="fas fa-envelope"></i> carrentnepal@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Babarmal,kathmandu </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
     </div>

   </section>
   <!-- footer section ends  -->


  

   <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>