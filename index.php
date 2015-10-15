<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="countdown.js"></script>
<script type="text/javascript" src="slider.js"></script>
<script type="text/javascript" src="navdrop.js"></script>



</head>


<body>


<?php include 'nav.php';?>


<div class="cardwrapper">

<div class="cardholder">




	<p style="clear:both;" > <br> </p>

	<div class= "basic_card">
		<p style="text-align:center; font-size:200%"> Grand Reopening in: </p>
		<p  id="timer">00:00:00:00</p>

		<script type="text/javascript">
			timer = new Countdown();
			timer.init();
		</script>
	</div>

	

	<div class="card">

		<h2>
			Welcome 
		</h2>

		<div class="cardtext" >
			<p > Welcome to silverado cinema the <br> although small we are unique for, <br>
			entertainment is our goal and the <br> newly referbished silverado cinema <br> offers amazing new seating options <br>
			from normal to beanbags and even <br> firstclass. We have all you need <br> for an enjoyable night. <br> 
			</p>
		</div>

	</div>



	<div class="card">

		<h2>
			New Seating! 
		</h2>

			<div class="cardtext">
				<div class="img">
				<img src="layout.jpg" alt="Floorplan Layout" style="width:200px;height:150px;">
		
			
			</div>
		</div>
	</div>



	<div id = "slider">
			<ul class = "slides">
				<li class= "slide"> <img src="mov01.jpg" alt="Hotel Transivania 2 poster" > <p>Hotel Transivania -PG Running time: 101min</p></li>
				<li class= "slide"><img src="mov02.jpg" alt="Deadpool poster">  <p>Deadpool -MA15+ Running time: 90min</p></li>
				<li class= "slide"><img src="mov03.jpg" alt="Love, Rosie poster">  <p>Love, Rosie -R Running time: 102min</p></li>
				<li class= "slide"><img src="mov04.jpg" alt="Elza poster">  <p>Elza - Running time: 78min</p></li>
				<li class= "slide"><img src="mov01.jpg" alt="Hotel Transivania 2 poster">  <p>Hotel Transivania -PG Running time: 101min</p></li>
			</ul>
	</div>




        <table style="width:95%;  margin-top: 20px;">

           <tr class="stripe">
            <th>Pricing List</th>
            <th> Mon-Tue <br>(all day) <br> Mon-Fri <br>(1pm only)</th>
            <th> Wed-Fri<br>(not 1pm) <br> Sat-Sun<br>(all day)</th>
          </tr>
          <tr class="stripe">
            <td> Adult</td>
            <td> $12</td>
            <td> $18</td>
          </tr>
             <tr class="stripe">
            <td> Concession</td>
            <td> $10</td>
            <td> $15</td>
          </tr>
             <tr class="stripe">
            <td> Child</td>
            <td> $8</td>
            <td> $12</td>
          </tr>
             <tr class="stripe">
            <td> FirstClass-Adult</td>
            <td> $25</td>
            <td> $30</td>
          </tr>

        </table>
  
 
	
</div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>