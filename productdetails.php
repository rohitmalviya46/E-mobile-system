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
		<title>Mobilestore Website Template | single :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script src="js/imagezoom.js"></script>
		<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
					</script>
					
					<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
	</head>
	<body>
<script>

$(document).ready(function()
{
	$(".cartt").click(function()
	{
		var pid = $(this).attr("pid");
		var hquan = $("#hquan").val();
	
		if(hquan=="")
		{
			alert("Please Select Quantity");
		}
		else
		{
			$.post('admin/api.php',{proid:pid,hquan:hquan},function(res)
			{
				alert(res);
				$('body').load('index.php');
			})
		}
		
		
		
	})
})

</script>
<?php include("header.php"); 
$pid=$_GET['pid'];

if($pid!="")
{
$sel=mysqli_query($link,"select * from product where id='$pid'");
$arr=mysqli_fetch_assoc($sel);
?>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
		    				
		    				<li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="detalis-image">
		    		<div class="flexslider">
						<ul class="slides">
							<li data-thumb="admin/images/<?= $arr['image']; ?>">
								<div class="thumb-image"> <img src="admin/images/<?= $arr['image']; ?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>


						</ul>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		<div class="details-categories">
		    			<ul>
		    				<li><h3>Category : </h3></li>
		    				<li class="active1"><a href="category.php?cname=<?= $arr['category']; ?>"><span><?= $arr['category']; ?></span></a></li>

		    			</ul>
		    		</div><br />
					<br/>
		    		<div class="brand-value">
		    			<h3><?= $arr['mobile_name']; ?></h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>Rs <?= $arr['price']; ?></span></li>
			    				<li><h5><?= ($arr['price']-$arr['discount']); ?></h5></li>
			    				<br />
			    				
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
						<?php
			    		if($arr['quantity']>0)
						{
							echo '<a href="#">Instock</a>';
						}
						else
						{
							echo '<a href="#">Out Of Stock</a>';
						}
							
						?>
			    			
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history" >
		    			<h3 style="font-size:20px; font-weight:bold; color:blue;">Description :</h3>
						
		    			<p style="font-weight:bold; color:black">
						PROCESSOR : <?= $arr['processor']; ?><br/>
						OPERATING SYSTEM : <?= $arr['operating_system']; ?><br/>
						RAM : <?= $arr['ram']; ?><br/>
						Internal Memory : <?= $arr['internal_memory']; ?><br/>
						CAMERA : <?= $arr['camera']; ?><br/>
						DISPLAY : <?= $arr['display']; ?><br/>
						BATTERY : <?= $arr['battery']; ?><br/>
						COLOUR : <?= $arr['colour']; ?><br/>
						WARRANTY : <?= $arr['warranty']; ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</p>
						<?php
						if($arr['quantity']>0)
						{
						?>
						<input type="number" min="1" max="5" placeholder="Quantity" id="hquan" style=" width:82px; height:35px; font-size:18px; text-align:center;"/>
		    			<a href="javascript:void()" pid="<?= $arr['id']; ?>" class="cartt">Addcart</a>
						<?php
						}
						else
						{
						?>
							<a href="javascript:void()" style="background:beige; color:indianred; font-weight:bold;">Out Of Stock</font></a>
						<?php
						}
						?>
		    		</div>

		    		<div class="clear"> </div>
		    		
		    		</div>
<?php
}
else
{
	header("location:404.php");
}
?>

		    		<div class="clear"> </div>

			</div>
			
		    	</div>
<?php include("sidebar.php"); ?> 
		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>

