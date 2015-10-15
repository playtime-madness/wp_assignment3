<?php
session_start();

?>



<!DOCTYPE html>
<html>

<head>


	<link rel="stylesheet" type="text/css" href="stylesheet.css">


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="navdrop.js"></script>



</head>



<body>


<?php include 'nav.php';?>


<hr>

<div class="cardwrapper">
    
<div class="cardholder">
    <div class = "basic_card" style= "margin-top:10px">


        <form action='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php' method="post">

        <br> 

         First Name: <br>
        <input type="text" name= "firstname" placeholder="First Name" required><br>

         Last Name: <br>
        <input type="text" name= "lastname" placeholder="Last Name" required> <br>

        Title: <br>
         <select type="text" name= "title" value="Title">
            <option value="mr">Mr</option>
            <option value="master">Master</option>
            <option value="miss">Miss</option>
            <option value="mrs">Mrs</option>
            <option value="ms">Ms</option>
        </select> <br>

        Email:<br>
        <input name= "email" type= "email" required> <br>

        Contact number: <br>
        <input name= "tele" type= "tel" required> <br>

         Subject: <br>
         <select type="text" name= "subject" value="Title" required>
            <option value="mr">General Enquiry</option>
            <option value="master">Group & Corperate Booking</option>
            <option value="miss">Sugestion & Complaints</option>
        </select> <br>

        Message: <br>
        <textarea name= "message" rows="10" cols="24" required >
        
        </textarea> <br>

        <input name= "Sub" type= "submit" value= "Submit" > <br>



        </form>
    </div>
</div>
</div>



<?php include 'footer.php'; ?>



</body>



</html>