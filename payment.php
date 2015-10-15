<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="navdrop.js"></script>

<?php include 'cartAdd.php';?>

<script>




$(document).ready(function(){
	
		var data =  {'print': "edit"}; 


	    $.post('cartAdd.php', data, function(response) {
            	$( ".result" ).html(response);
        });
}


function purchasedetails(){

	var data =  {'name': $(#name).val(),
				'email': $(#email).val(),
				'tele': $(#tele).val()

	}; 

	    $.post('purchase.php', data, function(response) {});
		alert("transaction complete!");
}


function clear(){
		
		var data =  {'action': "BOB"}; 


	    $.post('cartAdd.php', data, function(response) {
            	$( ".result" ).html(response);
       
});
</script>

	


</head>
<body>



<?php include 'nav.php';?>

 

</div>
</div>
</div>

<p style="clear:both;" > <br/> </p>

<div class="cardwrapper">


<div class="cardholder">
<div class="basic_card">
	<form>

        <br> 

         First Name: <br>
        <input type="text" id="name" placeholder="First Name" required><br>

       
        Email:<br>
        <input name= "email" id="email" type= "email" required> <br>

        Contact number: <br>
        <input name= "tele" id="tele" type= "tel" required> <br>

       
        <input name= "Sub" type= "submit" value= "Submit" onclick='purchasedetails()'> <br>

        </form>
</div>

<div class="basic_card">
	<p> cart</p> <br>
	<table style='width:100%; text_align:left;' class = result> </table> 
	
<table style='width:100%;'>
</tr>
 	 <td> <button type="submit" class="button" name="select" onclick='clear()'>Empty cart</button></td> 
    <td></td>
 </tr>


</table>
<?php
	


?>


</p>
</div>


</div>

</div>


<?php include 'footer.php'; ?>


</body>

</html>

