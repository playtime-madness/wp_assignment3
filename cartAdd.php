<?php
session_start();

?>

<?php

if (isset($_POST['action'])) {


  if($_POST['action'] == "BOB"){

   		session_destroy();

	}else if($_POST['action'] == "modify"){
		
		modify($_POST['quan'],$_POST['item']);

	}else{

		store();
  	}
}


if (isset($_POST['remove'])) {
	
	clear();

}



if (isset($_POST['print'])) {
	
	printa($_POST['print']);
	exit;
}

function store() {
	
	 
	if(!isset($_SESSION['cart'])){
	 $_SESSION['cart'] = array();
	}

	$ticket = $_POST['action'];

 	 $screening = array("movie"=>$_POST['movID'],
							"day" =>$_POST['day'],
							"time" =>$_POST['time'],
							"seats" =>array($ticket=> array("quantity" => $_POST['quan']))
							 );

		
	


		array_push($_SESSION['cart'],$screening);
	 
		

	printa("edit");

  
    exit;
}

function clear() {


unset($_SESSION['cart'][$_POST['remove']]);

$_SESSION['cart'] = array_values($_SESSION['cart']);
printa("edit");

exit;
}


function printa($state) {

	$size = 0;
	$total = 0;


	foreach($_SESSION['cart'] as $key){


		if (isset($key['seats']['SA'])){
			$string = "  Adult x " .  $key['seats']['SA']['quantity'];
			$subtotal = $key['seats']['SA']['quantity'] * 10;
			}

		if (isset($key['seats']['SP'])){
			$string ="  Concession  x ". $key['seats']['SP']['quantity'];
			$subtotal = $key['seats']['SP']['quantity'] * 10;

		}
		if (isset($key['seats']['SC'])){
			$string ="  Child  x ". $key['seats']['SC']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}
		if (isset($key['seats']['FA'])){
			$string ="  First Class Adult  x ".$key['seats']['FA']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}
		if (isset($key['seats']['FC'])){
			$string ="  First Class Child  x ".$key['seats']['FC']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}
		if (isset($key['seats']['B1'])){
			$string ="  Bean Bag 1 x ".$key['seats']['B1']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}
		if (isset($key['seats']['B2'])){
			$string ="  Bean Bag 2  x ".$key['seats']['B2']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}
		if (isset($key['seats']['B3'])){
			$string ="  Bean Bag 3  x ".$key['seats']['B3']['quantity'];
			$subtotal = $key['seats']['SC']['quantity'] * 10;

		}

		$mod = 'qu'. $size;
		$total = $total + $subtotal;

		if($state == "edit"){
			$button = "<td> <button type='submit' class='delete' value='$size' onclick='print()'>edit</button> </td>";
		}
		else{
			$button = "<td> <button type='submit' class='delete' value='$size' onclick='del($(this).val())'>remove</button> </td>".
				  	"<td><input type='number'  class='$mod' style='width:40px;'></td>".
					"<td><button type='submit' value='$size' onclick='modify(2,$(this).val())')'>done</button> </td>";

		}	

		 echo "<tr><td> " . $key['movie'] . $string . "<td>"."subtotal: $" . $subtotal."</td>" ."</td>". $button . "</tr>";
		 
		

		$size++;
	}
	
	 echo "<tr><td></td><td> " ."Total: $" . $total ."</td></tr>";
}

function modify($value, $id) {

	switch(key($_SESSION['cart'][$id]['seats'])){
	case SA:$_SESSION['cart'][$id]['seats']['SA']['quantity'] = $value; break;
	case SP:$_SESSION['cart'][$id]['seats']['SP']['quantity'] = $value; break;
	case SC:$_SESSION['cart'][$id]['seats']['SC']['quantity'] = $value; break;
	case FA:$_SESSION['cart'][$id]['seats']['FA']['quantity'] = $value; break;
	case FC:$_SESSION['cart'][$id]['seats']['FC']['quantity'] = $value; break;
	case B1:$_SESSION['cart'][$id]['seats']['B1']['quantity'] = $value; break;
	case B2:$_SESSION['cart'][$id]['seats']['B2']['quantity'] = $value; break;
	case B3:$_SESSION['cart'][$id]['seats']['B3']['quantity'] = $value; break;
	}

printa("edit");

exit;
}




?>