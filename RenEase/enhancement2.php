<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>RENEASE</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body style="background-color:rgba(0, 0, 0, 0.5);">
  <section class="header">
    <nav>
      <a href="index.php"><img src="images/logo.png" alt="images/logo.png"></a>
      <div class="nav-links" id="navLinks">
       <i class="fa fa-window-close" onclick="hideMenu()"></i>
       <ul>
         <li><a href="index.php">HOME</a></li>
         <li>
           <div class="dropdown">
             <button  class="dropbtn" id="vehicleavail"  style="float:right" onclick="myFunction()" >VEHICLE AVAILABLE
               <i class="fa fa-caret-down"></i>
             </button>
             <div id="myDropdown" class="dropdown-content">
             <a href="Budget.php">BUDGET</a>
             <a href="Standard.php">STANDARD</a>
             <a href="Luxury.php">LUXURY</a>
             <a href="SUV.php">SUV</a>
             </div>
           </div> 
         </li>
         <li><a href="about.php">ABOUT</a></li>
         <li><a href="enquiry.php">ENQUIRY</a></li>
         <li>
           <div class="dropdown">
           <button onclick="drop()" class="dropbtn">ENHANCEMENTS
             <i class="fa fa-caret-down"></i>
           </button>
             <div id="myDropdown2" class="dropdown-content">
               <a href="enhancement.php">Enhancement 1</a>
               <a href="enhancement2.php">Enhancement 2</a>
             </div>
         </div>
         </li>
         <li><a href="disclaimer.php">DISCLAIMER</a></li>
       </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
 </nav>
    <div class="text-box">
       <h1>ENHANCEMENT 2</h1>
    </div>
    </section>
<!--Enhancements 1-->
<article>
  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/j1.png" alt="images/1.png">
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Responsive Hamburger Icon</h1>
      <p>When website is viewed on mobile device the text and images changes according to the size and the navigation bar changes to hamburger selected icon.</p>
      <div><a href="index.php" class="hero-btn2">View Enhancement</a></div>
    </div>
  </div>
  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/j2.png" alt="images/2.png">
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Image Slideshow</h1>
      <p>Image slideshow is enhancement using javascript image is changed after every 2 seconds.</p>
      <div><a href="index.php#j1" class="hero-btn2">View Enhancement</a></div>
    </div>
  </div>
  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/j3.PNG" alt="images/3.png">
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>CountDown for Lucky Draw</h1>
      <p>There is a live countdown on the Website for the Lucky draw that will end on New year.</p>
      <div><a href="index.php#j3" class="hero-btn2">View Enhancement</a></div>
    </div>
  </div>
</article>

  <!-- Footer -->
<footer class="footerr">
  <h4>About Us</h4>
  <p>You can now submit an email by simply filling a description form requiring your contact details, and our team will get back to you.</p>
  <div class="icon">
    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
    <a href="https://telegram.org"><i class="fa fa-telegram"></i></a>
  </div>
  <p>Made with <i class="fa fa-heart-o"></i> by <a href="mailto:101231186@students.swinburne.edu.my">101231186@students.swinburne.edu.my</a></p>
  <a href="acknowledgement.php" class="hero-btn2"><b>ACKNOWLEDGEMENTS</b></a>
</footer>
<script src="script.js"></script>
<script src="enhancement2.js"></script>
</body>
</html>