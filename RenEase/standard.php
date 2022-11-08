
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
       <h1>STANDARD</h1>
    </div>
    </section>
<!--Aboutrenrase-->
<article>
  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/corolla.png" alt="Corolla">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2016 Model</p>
      <p><i class="fa fa-money"></i> RM80/day</p>
      <div><a href="https://www.youtube.com/watch?v=c2ADlrBctN8" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Toyota Corolla</h1><br><br><br>
      <p>The Toyota Corolla is a subcompact and small automobile line produced by Toyota and sold worldwide.<br> The Corolla was introduced in 1966 and by 1974 had become the best-selling car in the world, and it has been one of the best-selling automobiles in the world.<br> The Toyota Corolla surpassed the Volkswagen Beetle as the best-selling nameplate in the world in 1997.<br> In 2021, Toyota will have sold 50 million Corollas across twelve generations.</p>
      <a class="hero-btn2" onclick="storeitem('Toyota Corolla')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/elentra.png" alt="Elentra">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2021 Model</p>
      <p><i class="fa fa-money"></i> RM100/day</p>
      <div><a href="https://www.youtube.com/watch?v=4LG_hpL_wKI" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Hyundai Elantra</h1><br><br><br>
      <p>The Hyundai Elantra, sometimes known as the Hyundai Avante, is a tiny automobile manufactured by Hyundai since 1990.<br> In Australia and some European markets, the Elantra was first marketed as the Lantra.</p>

      <a class="hero-btn2" onclick="storeitem('Hyundai Elantra')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/persona.png" alt="Persona">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2021 Model</p>
      <p><i class="fa fa-money"></i> RM100/day</p>
      <div><a href="https://www.youtube.com/watch?v=mrBCVabID8E" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Proton Persona</h1><br><br><br>
      <p>The Proton Persona is a line of compact and subcompact automobiles manufactured by Proton, a Malaysian automaker.<br> The Proton Persona (C90) is the export name given to the Proton Wira in its first iteration.<br> The 'Proton Persona' nameplate was first used in the British market in November 1993.<br> The 3-door Persona Compact and 2-door Persona Coupé were eventually added to the original Persona.</p>

      <a class="hero-btn2" onclick="storeitem('Proton Persona')"> <div>Enquiry</div></a>
    </div>
  </div>

  <div class="holdingcontainer">
    <!--left-->
    <div class="internalcontainerl">
      <img class="responsive" src="images/saga.png" alt=" Saga">
    </div>
    <!--Middle-->
    <div class="internalcontainerm">
      <h3>Specifications</h3>
      <p><i class="fa fa-cog"></i> Automatic</p>
      <p><i class="fa fa-car"></i> 4 Doors</p>
      <p><i class="fa fa-registered"></i> 2019 Model</p>
      <p><i class="fa fa-money"></i> RM70/day</p>
      <div><a href="https://www.youtube.com/watch?v=bYK5J4KIuJo" class="hero-btn2">View More</a></div>
    </div>
    <!--right-->
    <div class="internalcontainerr">
      <h1>Proton Saga</h1><br><br><br>
      <p>The Proton Saga is a line of compact and subcompact automobiles manufactured by Proton, a Malaysian automaker.<br> The Proton Saga was the first Malaysian car and a notable milestone in the Malaysian automotive industry introduced in 1985.<br> With over 1.8 million units built over 35 years, the Saga is Proton's longest-running and best-selling nameplate.</p>

      <a class="hero-btn2" onclick="storeitem('Proton Saga')"> <div>Enquiry</div></a>
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