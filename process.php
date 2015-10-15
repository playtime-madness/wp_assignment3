
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="navdrop.js"></script>

<?php include 'cartAdd.php';?>

<script>



    var mov= '<?php echo $_POST["movieID"]; ?>';
  	var day = '<?php echo $_POST["day"]; ?>';
	var time = '<?php echo $_POST["time"]; ?>';



$(document).ready(function(){
	
		var data =  {'print': "edit"}; 


	    $.post('cartAdd.php', data, function(response) {
            	$( ".result" ).html(response);
        });

    $('.button').click(function(){

        var buttonVal= $(this).val();
		var q = "#" + buttonVal + "_Q";
		var quantity = $(q).val();		
		var price = 15.00
        var data =  {'action': buttonVal, 
					 'movID' : mov, 
					 'day' :day, 
					 'time' : time,
					 'quan' : quantity, 
					 'price' : price
					};


        $.post('cartAdd.php', data, function(response) {
            	$( ".result" ).html(response);
        });
    });

	$('.delete').click(function(){
	
       var removeitem= $(this).val();
		 
		var data =  {'remove': removeitem}; 
		$.post('cartAdd.php', data, function(response) {
				 $(".result").html(response);

		});

	});


});



function print(){


		var data =  {'print': "display"}; 
		$.post('cartAdd.php', data, function(response) {
				 $(".result").html(response);

});
}

function printedit(){


		var data =  {'print': "edit"}; 
		$.post('cartAdd.php', data, function(response) {
				 $(".result").html(response);

});
}

function del($val){


		var data =  {'remove': $val}; 
		$.post('cartAdd.php', data, function(response) {
				 $(".result").html(response);

});
}

function modify($val,$item){
		
		
		var quantity = $(".$val").val();
	
		var data =  {'action': "modify",
					 'quan': quantity ,
					 'item': $item
					}; 
		$.post('cartAdd.php', data, function(response) {
				 $(".result").html(response);

});

}




</script>

	


</head>
<body>



<?php include 'nav.php';?>

<p style="clear:both;" > <br> </p>

<div class="cardwrapper">


<div class="cardholder">





<p style="clear:both;" > <br> </p>

<div class="basic_card">

<table style="width:100%; ">

   <tr>
    <td> Ticket Type</td>
    <td> Quantity</td>
    
  </tr>


  <tr>
    <td > Adult</td>

    <td ><input type="number" id = "SA_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="SA"> add to cart </button> </td>
    
  </tr>


    <td>Concession</td>
    <td ><input type="number" id = "SP_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="SP"> add to cart </button> </td>

  </tr>

    <td>Child</td>
	<td ><input type="number" id = "SC_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="SC"> add to cart </button> </td>

  </tr>

    <td>First Class Adult </td>
	<td ><input type="number" id = "FA_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="FA"> add to cart </button> </td>
  </tr>

    <td>First Class Child</td>
	<td ><input type="number" id = "FC_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="FC"> add to cart </button> </td>
  </tr>

    <td>Bean Bag - 1 person</td>
    	<td ><input type="number" id = "B1_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="B1"> add to cart </button> </td>
  </tr>

    <td>Bean Bag - 2 people</td>
  	<td ><input type="number" id = "B2_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="B2"> add to cart </button> </td>
  </tr>

    <td>Bean Bag - 3 children </td>
   	<td ><input type="number" id = "B3_Q" value = "1" style="width:40px;"></td> 
	<td><button type="submit" class="button" name="insert" value="B3"> add to cart </button> </td>
  </tr>

 

</tr>

    <td></td>
    <td> <button type="submit" class="button" name="select" value="BOB">Empty cart</button></td> 
    <td></td>
 </tr>


</table>

</div>
</div>
</div>

<p style="clear:both;" > <br/> </p>

<div class="cardwrapper">


<div class="cardholder">


<div class="basic_card">
	<p> cart</p> <br>
	<table style='width:100%; text_align:left;' class = result> </table> 
	
<table style='width:100%;'>
</tr>
 	<td><button type="submit" onclick="location.href='payment.php';">Proceed</button></td>
    <td> <button type="submit" class="button" name="select" value="BOB">Empty cart</button></td> 
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

