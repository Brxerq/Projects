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
       <h1>BUDGET</h1>
    </div>
    </section>
<article><a id="6"></a>
  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/fordfocus.png" alt="images/fordfocus.png">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Manual</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2020 Model</p>
      <p><i class="fa fa-money"></i> RM60/day</p>
      <div><a href="https://www.youtube.com/watch?v=kZdybFvg7wA" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Ford Focus</h1><br><br><br>
      <p>The Ford Focus is a tiny car manufactured by Ford Motor Company.<br> It was developed as part of Alexander Trotman's Ford 2000 plan, which planned to globalise model development and market one compact vehicle worldwide.<br> Ford of Europe's German and British design teams were principally responsible for the original Focus.</p>
      <a class="hero-btn2" onclick="storeitem('Ford Focus')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/fiatpanda.png"  alt="images/fiatpanda.png">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Manual</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2020 Model</p>
      <p><i class="fa fa-money"></i> RM60/day</p>
      <div><a href="https://www.youtube.com/watch?v=CmMMg876mw4" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Fiat Panda</h1><br><br><br>
      <p>The Fiat Panda is a five-passenger city car produced and sold by Fiat.<br> It is currently in its third generation.<br> The first generation Panda was a two-box, three-door hatchback created by Italdesign's Giorgetto Giugiaro and Aldo Mantovani and produced through the model year 2003, with an all-wheel-drive option launched in 1983.</p>
      <a class="hero-btn2" onclick="storeitem('Fiat Panda')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/fiat500.png"  alt="images/fiat500.png">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 3 Doors</p>
      <p><i class="fa fa-registered"></i> 2020 Model</p>
      <p><i class="fa fa-money"></i> RM70/day</p>
      <div><a href="https://www.youtube.com/watch?v=M05jqMFF2jc" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Fiat 500</h1><br><br><br>
      <p> Fiat Automobiles produced and marketed the Fiat 500, a rear-engined, four-seat small city car, from 1957 to 1975.<br> It was available in two-door saloon and two-door station waggon body styles.</p>
      <a class="hero-btn2" onclick="storeitem('Fiat 500')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/protoniriz.png"  alt="images/protoniriz.png">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2020 Model</p>
      <p><i class="fa fa-money"></i> RM60/day</p>
      <div><a href="https://www.youtube.com/watch?v=wEAfVVBv-jU" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Proton Iriz</h1><br><br><br>
      <p>The Proton Iriz, designated P2-30A, is a Malaysian automobile manufacturer's five-door, five-seater supermini.<br> Former Malaysian Prime Minister Mahathir Mohamad unveiled it on September 25, 2014, in Proton City.<br> The Iriz is the Proton Savvy's spiritual successor.</p>
      <a class="hero-btn2" onclick="storeitem('Proton Iriz')"> <div>Enquiry</div></a>
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