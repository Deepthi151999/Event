<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com.css?family=Open+Sans">
  <style>
  	body{
  		height: 100vh;
  		display:flex;
        justify-content: center;
        align-items: center;
        background:rgba(0,0,0,0.4) 
  	}
  	.img-wrap img{
  		width:100%;
  		padding: 10px;
  		border-radius: 50%;
     	box-shadow: 0 0 10px #99999;
     }
     p{
           font-family: cursive;
           font-size: 20px;
     }
  	}
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h2 style="font-family: harrington;text-align:center;"><b>Wedding</b></h2>
	           
				<p>
					Marriages are meant to make two people live together, forever with lots of happiness, hurdles, and with soo, many moments happened.</p>
					<p>We make you celebrate that happy moment with your partner which will make you remember them forever.</p>
					<p>We will provide you with all kind of services efficientlyduring the time of the event, that makes you satisfy heartfully.

				</p>
			
			</div>
			<div class="col-sm-5">
				<div class="img-wrap">
					<img src="eventimages/wed.jpg" class="image-fluid"	>
						
					
				</div>
					
			</div>

		</div>
		<form action="booking.php" method="post">
		<a href="booking.php" class="btn btn-info">Book Your Event</a>	
		</form>
	</div>

</body>
</html>









