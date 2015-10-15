<?php
// Start php session
session_start();
?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="navdrop.js"></script>


	
<script>


function data(){

	var xh;
	xh = new XMLHttpRequest();

	xh.onreadystatechange = function() {
	if(xh.readyState < 4)
		document.getElementById('div1').innerHTML = "Updating...";
	else if(xh.readyState === 4) {
		if(xh.status == 200 && xh.status <300)
			document.getElementById('div1').innerHTML = xh.responseText;
			more();
		}
	}

xh.open('POST', 'http://titan.csit.rmit.edu.au/~e54061/wp/moviesHTML.php?day=Monday&formaction=process.php');
xh.send(null);


}


function more(){

var new_butt= document.createElement('button');
new_butt.id = "rd";
new_butt.innerHTML= "View More";

$(new_butt).insertBefore( ".details" );

}


$(document).ready(function(){


// $url = "http://" . $_SERVER['SERVER_NAME'] . "/~e54061/wp/moviesHTML.php";
	
	data();

    $("#div1").on('click', '#rd', function(){
       	 $(".details").slideToggle("slow");
     });

});


</script>

<style>





</style>


</head>
<body>



<?php include 'nav.php';?>

<div class="cardwrapper">

<div class="cardholder">


<div id = 'div1'> what </div>

</div>
</div>
<?php include 'footer.php'; ?>


</body>

</html>