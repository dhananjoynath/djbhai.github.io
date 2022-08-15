 <?php
 session_start();
 
 include "includes/functions.php";
  ?>
  
<!DOCTYPE html>
<head>
<title>Contact to DJBhai</title>

<?php
     include "header_files.php";

?>

</head>
<body>
<style> body{

background-color: #000000;
background-image: linear-gradient(127deg, #000000 0%, #2c3e50 74%);


}
button{padding:5px; width : 100%;
border: none;
background-image: linear-gradient(to right, pink , white); 
color: black; }

fieldset{margin:5px; 
color: white; 
border: .5px silver solid;
border-radius: 10px; 



}
fieldset legend{ margin-left: 45%; 
}

fieldset legend #dp{ border-radius: 100%; 
border: 2px solid white; }


.button:hover {

  background-image: linear-gradient(to right, red , yellow);
  color: black;
}



input[type=checkbox] {
  accent-color: red;
}




</style>


<br>

<p id="h1"> Contact Dhananjoy Nath</p> 



<p>
<font color="white"> Please fill this form in a decent manner.......</font>
</br>
<font color="red"> <b>Note:-</b>  </font>

<font color="white">Please provide your correct email id so we can contact to you.</font>
 </p>
 
 

<form id="f1" action="contact_me/mail_submit.php" method="get">
    <fieldset>
  <legend> 
  
  
  <img id="dp"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Dhananjoy_Nath.jpg/556px-Dhananjoy_Nath.jpg" width="50px" height="50px" = > </legend>
  
  
  
    <p>
   <font color="white">
   Your Name: </font> 
   
   <font color="red"> * </font>
<input type="text" autocomplete="off"  name="name" value="" placeholder="Name">
 
    </p>
    
    <p>
    <font color="white">
    Your E-mail </font>
     <font color="red"> * </font>
<input autocomplete="off" type="text" id="email" name="email" value="" placeholder="Email">
    </p>
    <p>
    
    
    
    
    <font color="white">
    Subject </font> <font color="red"> * </font>
    
    <select name="subject"> 
   <option value="Help"> Help</option>
    <option value="Request"> Request</option>
    <option value="Report"> Bug reports </option>
     <option value="others"> Others </option>
    </select>
    
    

</p>
    

<p>
<font color="white">
Message </font>
<font color="red"> * </font>



<textarea id="text" oninput="myFunction()" name="message" placeholder="Message">
</textarea>

</p><p>


<p>
<input type="checkbox" id="newsletter" name="get_newsletter" value="yes" > Subscribe for newsletter  </p>

<p>
<button  class="button" type="submit">  Submit Message</button>

</p>
<br>


 </fieldset>
</form>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</html>