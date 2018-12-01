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

		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content">
		    	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Modi Institute of Management & Technology,+DADABARI,+KOTA,+RAJSTHAN,+INDIA&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Modi Institute of Management & Technology,+DADABARI,+KOTA,+RAJSTHAN,+INDIA&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Modi Institute of Management & Technology,+DADABARI,+KOTA,+RAJSTHAN,+INDIA &amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Modi Institute of Management & Technology,+DADABA,+KOTA,+RAJSTHAN,+INDIA&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2> Information :</h2>
						    	<p>MODI INSTITUTE OF MANAGEMENT AND TECHNOLOGY</p>
						   		<p>KOTA</p>
						   		<p>RAJSTHAN,INDIA</p>
				   		<p>Phone:(+91) 9785155999</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="malviyarohit168@gmail.com">malviyarohit168@gmail.com</a></span></p>
				   		<p>Follow on: <span><a href="https://www.facebook.com/">Facebook</a></span>, <span><a href="https://twitter.com/">Twitter</a></span></p>
				   </div>
				</div>				
				
<?php


extract($_POST);
if(isset($sub))
{
	if(mysqli_query($link,"insert into feedback (name, email, contact, message) values ('$name','$email','$mn','$message')"))
	{
		$msg="Message Sent Successfully";
	}
}



?>
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  <center><h2><font color="blue"><label><?= @$msg; ?></label></font></h2></center>
				  	<h2>Contact Us</h2>
					    <form method="post" autocomplete="off">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email"required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mn" required maxlength=10></span>
						    </div>
						    <div>
						    	<span><label>MESSAGE</label></span>
						    	<span><textarea name="message" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="sub"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>

		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>

