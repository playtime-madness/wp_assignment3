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


</head>
<body>



<?php include 'nav.php';?>



<div class="cardwrapper">

<div class="cardholder">




	<p style="clear:both;" > <br> </p>

	<div class= "basic_card">

<table style="width:100%; ">

   <tr>
    <td> Ticket Type</td>
    <td> Quantity</td>
    
  </tr>

  <tr>
    <td style="border-top: 1px solid">Adult</td>
    <td style="border-top: 1px solid"> <input type="text" name= "SA"  id = "SA" style="width:20px;" onkeyup="calc(this.id,'SA-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>Concession</td>
    <td> <input type="text" name= "SP" id = "SP" style="width:20px;" onkeyup="calc(this.id,'SP-Pr',10);" ></td> 
   
    <td><button > add to cart </button> </td>

  </tr>

    <td>Child</td>
    <td> <input type="text" name= "SC" id = "SC" style="width:20px;" onkeyup="calc(this.id,'SC-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>First Adult Child</td>
    <td> <input type="text" name= "FA" id = "FA" style="width:20px;" onkeyup="calc(this.id,'FA-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>First Class Child</td>
    <td> <input type="text" name= "FC" id= "FC" style="width:20px;" onkeyup="calc(this.id,'FC-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>Bean Bag - 1 person</td>
    <td> <input type="text" name= "B1" id = "B1" style="width:20px;" onkeyup="calc(this.id,'B1-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>Bean Bag - 2 people</td>
    <td> <input type="text" name= "B2" id = "B2" style="width:20px;" onkeyup="calc(this.id,'B2-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

    <td>Bean Bag - 3 children </td>
    <td> <input type="text" name= "B3" id = "B3"  style="width:20px;" onkeyup="calc(this.id,'B3-Pr',10);"></td> 
    <td><button > add to cart </button> </td>
  </tr>

 
    <td></td>
    <td>Total</td> 
    <td><input type="text" name= "total"  id = "total" value="0.00" style="width:40px;" disabled></td>
  </tr>

    <td></td>
    <td>Discount</td> 
    <td><input type="text" name= "discount"  id = "discount" value="0.00" style="width:40px;" disabled></td>
  </tr>

</tr>

    <td></td>
    <td> <input name= "Sub" type= "submit" value= "View Cart" ></td> 
    <td></td>
  </tr>


</table>

<?php include 'footer.php'; ?>


</body>

</html>


