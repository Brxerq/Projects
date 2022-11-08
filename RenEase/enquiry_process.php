<?php 
    include_once('setting/config.php');



    if (isset($_POST['save'])) 
    {
    	         $FirstName       =  $_POST['FirstName'];
    	         $LastName        =  $_POST['LastName'];
    	         $Email           =  $_POST['Email'];
    	         $DOB             =  $_POST['DOB'];
    	         $PhonerNumber    =  $_POST['PhonerNumber'];
    	         $StreetAddress   =  $_POST['StreetAddress'];
    	         $CityTown        =  $_POST['CityTown'];
    	         $state           =  $_POST['state'];
    	         $Postcode        =  $_POST['Postcode'];
    	         $subject         =  $_POST['subject'];
    	         $product         =  $_POST['product'];
    	         $comments        =  $_POST['comments'];




    $enquiry_Query = "
    	     		 INSERT INTO enquiry(FirstName,LastName,Email,DOB,PhonerNumber,StreetAddress,CityTown,state,Postcode,subject,product,comments)
    	     		 VALUES('$FirstName','$LastName','$Email','$DOB','$PhonerNumber','$StreetAddress','$CityTown','$state','$Postcode','$subject','$product','$comments')
    	             ";

    $ConfirmQuery  =  mysqli_query($DBcon,$enquiry_Query);

              if($ConfirmQuery>0)
              {

              	     echo "<script>alert('WOw!, Success Enquiry sent');window.location.href='enquiry.php';</script>";
              }

              else
              {
              	    // $Query_error     =    "There was an error";
              	     echo "<script>alert('Error');</script>"; 
              }


    }









 ?>