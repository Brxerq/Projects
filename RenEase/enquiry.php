<?php 
    // include_once ('setting/config.php');



    // if (isset($_POST['save'])) 
    // {
    //            $FirstName       =  $_POST['FirstName'];
    //            $LastName        =  $_POST['LastName'];
    //            $Email           =  $_POST['Email'];
    //            $DOB             =  $_POST['DOB'];
    //            $PhonerNumber    =  $_POST['PhonerNumber'];
    //            $StreetAddress   =  $_POST['StreetAddress'];
    //            $CityTown        =  $_POST['CityTown'];
    //            $state           =  $_POST['state'];
    //            $Postcode        =  $_POST['Postcode'];
    //            $subject         =  $_POST['subject'];
    //            $product         =  $_POST['product'];
    //            $comments        =  $_POST['comments'];




    // $enquiry_Query = "
    //                  INSERT INTO enquiry(FirstName,LastName,Email,DOB,PhonerNumber,StreetAddress,CityTown,state,Postcode,subject,product,comments)
    //                  VALUES('$FirstName','$LastName','$Email','$DOB','$PhonerNumber','$StreetAddress','$CityTown','$state','$Postcode','$subject','$product','$comments')
    //                  ";

    // $ConfirmQuery  =  mysqli_query($DBcon,$enquiry_Query);

    //           if($ConfirmQuery>0)
    //           {

    //                  echo "script>alert('WOw!, Success Enquiry sent');window.location.href='enquiry.php';</script>";
    //           }

    //           else
    //           {
    //                 // $Query_error     =    "There was an error";
    //                  echo "<script>alert('Error');</script>";
    //           }


    // }









 ?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Enquiry</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <script src="enhancement2.js"></script>
</head>
<body style="background-color: rgba(20, 20, 20, 0.6)">
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
       <h1>ENQUIRY</h1>
    </div>
</section>
    <!--Aboutrenrase-->
  


    <form  method="post" action="enquiry_process.php" name="EmailForm" id="enquiryform" novalidate="novalidate">
      <fieldset>
<legend>Personal Details</legend><br><br>
  <label class="labels" for="fname">First name:</label><br>
  <input type="text" name="FirstName" id="fname" placeholder="Your first name" maxlength="25" />*<br><br>
  <label class="labels" for="lname">Last name:</label><br>
  <input type="text" name="LastName" id="lname" placeholder="Your last name" maxlength="25" />*<br><br>
  <label class="labels" for="email">Email:</label><br>
  <input type="email" name="Email" id="email" placeholder="Domain@mail.com" />*<br><br>
  <label for="DOB">Date of birth:</label><br>
  <input type="date" id="DOB" name="DOB" placeholder="MM/DD/YYYY"/>*<br><br>
  <label for="number">Phone number:</label><br>
  <input type="text" name="PhonerNumber" id="number" placeholder="##########" maxlength="10" />*<br><br>
</fieldset>
          <fieldset>
          <legend>Address</legend><br><br>
          <label for="street">Street address:</label><br>
          <input type="text" name="StreetAddress" id="street" placeholder="Your street address" maxlength="40" />*<br><br>
          <label for="city">City/town:</label><br>
          <input type="text" name="CityTown" id="city" maxlength="20" />*<br><br>
          <label for="state">State:</label><br>
          <select name="state" id="state">
						<option value="" disabled selected hidden>Select your state</option>
						<option value="Johor">Johor</option>
						<option value="Perak">Perak</option>
						<option value="Perlis">Perlis</option>
						<option value="Sabah">Sabah</option>
						<option value="Sarawak">Sarawak</option>						
						<option value="Kuala Lumpur">Kuala Lumpur</option>
					</select>* <br><br>
          <label for="postcode">Postcode:</label><br>
<input type="text" name="Postcode" id="postcode" maxlength="5"  placeholder="#####" />*<br><br>
</fieldset>
<fieldset>
  <legend>Services and Enquiry:</legend><br><br>
    <div>
        <div><label for="subject" id="subjectLabel">RE: Enquiry on</label></div>
        <div><input type="text" name="subject" id="subject" value=""/></div>
    </div>
        <div><label for="product" >Cars: <span class="asterisk">*</span></label></div>
        <div>
            <select name="product" id="product" onchange="change()">
            <optgroup label="Budget">
              <script>productlist1()</script>
            </optgroup>
            <optgroup label="Standard">
              <script>productlist2()</script>
            </optgroup>
            <optgroup label="Luxury">
              <script>productlist3()</script>
            </optgroup>
            <optgroup label="SUV">
              <script>productlist4()</script>
            </optgroup>
        </select>
        </div>
  <label for="comment">Comments: </label><br>
  <textarea id="comment" name="comments" rows="5" cols="30" placeholder="Enter comments here" maxlength="150"></textarea><br><br>
</fieldset>
<div id="submit-reset">
  <input class="hero-btn" name="save" type="submit" value="Submit" onclick="return validate()" />
  <input class="hero-btn" type="reset" value="Reset" />
</div>
</form>

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

</body>
</html>