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
    <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css" />
</head>
<style>
   body {
   background-color: #f2f2f2;
   font-family: Arial, sans-serif;
}

.form-container {
   background-color: #ffffff;
   border: 1px solid #cccccc;
   border-radius: 5px;
   box-shadow: 0px 0px 10px #cccccc;
   margin: 100px auto;
   padding: 20px;
   width: 400px;
}

h1 {
   text-align: center;
}

label {
   display: block;
   font-size: 18px;
   margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
   border: 1px solid #cccccc;
   border-radius: 5px;
   padding: 10px;
   width: 100%;
}

input[type="submit"] {
   background-color: #4CAF50;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   margin-top: 10px;
   width: 100%;
}

input[type="submit"]:hover {
   background-color: #45a049;
}












































































































</style>
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
            <h3>travel arround the nepal</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
      </div>
      <div class="swiper-slide slide" style="background:url(image/home2.jpg) no-repeat">
         <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel arround the nepal</h3>
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
  <!-- booking section starts  -->
  
     


<section class="booking">

<div class="form-container">
         <form action="submit-form.php" method="post">
            <h1>Registration Form</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
            <br>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            <br>
            <input type="submit" value="Submit">
         </form>
      </div>


   


</section>

<!-- booking section ends -->





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
