<!-- ------------------------------------------------------------- -->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
<?php include("header.php"); ?>
			
			<?php
			if(isset($_GET['oid']))
			{
			$orderid=$_GET['oid'];
			?>
		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content-grids">
		    	
				<div style="font-size:30px; margin-left:200px; margin-top:50px;">
				Order Placed Successfully<br/>
				<font size=5>&nbsp;&nbsp;&nbsp;&nbsp;Your Order No. = <?= $orderid ?></font>
				</div>
			<?php
			}
			else
			{
				header("location:404.php");
			}
			?>

		    
		    	</div>
<?php include("sidebar.php"); ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>

