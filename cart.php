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
		  
		  <style>
		  
		  table,th,td{border:1px solid black;}
		  th{font-weight:bold; font-size:20px; height:30px; padding:5px; vertical-align:middle;}
		  td{vertical-align:middle; padding:5px; font-weight:bold;}
		  #gt{font-weight:bold; font-size:20px; height:30px;}
		  </style>

	</head>
	<body>
	
<script>

			
			$(document).ready(function()
			{
				$(".del").click(function()
				{
					var delid = $(this).attr("delid");
					$.post('admin/api.php',{delid:delid},function(res)
					{
						$('body').load('cart.php');
					})
				})
			})
			
	
			
			$(document).ready(function()
			{
				$(".dec").click(function()
				{
					var decid = $(this).attr("decid");
					var quan = $(this).attr("quan");
					dquan = quan-1;
					if(dquan>0)
					{
						$.post('admin/api.php',{decid:decid, dquan:dquan},function(res)
						{
							$('body').load('cart.php');
						})
					}
				})
			})
			


			$(document).ready(function()
			{
				$(".inc").click(function()
				{
					var incid = $(this).attr("incid");
					var quan = $(this).attr("quan");
					quan++;
					iquan=quan;
					if(iquan<=5)
					{
					$.post('admin/api.php',{incid:incid,iquan:iquan},function(res)
						{
						$('body').load('cart.php');
						})
					}
					else
					{
						alert("Max 5 Quantity of Product Add Cart Per Transaction");
					}
				})
			})

	
</script>
<?php include("header.php"); 
$sel=mysqli_query($link,"select * from tempcart where sid='$sid' and purchase=0");
?>



		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content-grids">
		    	<h4>Shopping Cart</h4>
		    	<div class="section group">
				
				<br/>
				<table>
				<?php
				if(mysqli_num_rows($sel)>0)
				{
				?>
					<tr>
					<th>S.No.</th>
					<th>Category</th>
					<th>Mobile Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Delete</th>
					</tr>
				<?php
				}
				?>
				
				<?php
				if(mysqli_num_rows($sel)>0)
				{
				$sn=1;
					while($arr=mysqli_fetch_assoc($sel))
					{
					$pid=$arr['pid'];
					$sel1=mysqli_query($link,"select * from product where id='$pid'");
					$arr1=mysqli_fetch_assoc($sel1);
					$dprice=$arr1['price']-$arr1['discount'];
					$tprice=$dprice*$arr['quan'];
					@$gprice+=$tprice;
				?>
					<tr align="center">
					<td><?= $sn; ?></td>
					<td><?= $arr1['category']; ?></td>
					<td><?= $arr1['mobile_name']; ?></td>
					<td><img src="admin/images/<?= $arr1['image']; ?>" width=50px height=100px;/></td>
					<td>Rs <?= $dprice; ?></td>
					
					<td>
						<a href="javascript:void()" class="dec" decid="<?= $arr['id']; ?>" quan="<?= $arr['quan']; ?>"><img src="admin/images/dec.jpg" width=15px height=10px/></a> 

						<?= $arr['quan']; ?> 

						<a href="javascript:void()" class="inc" incid="<?= $arr['id']; ?>" quan="<?= $arr['quan'] ?>"><img src="admin/images/inc.jpg" width=20px height=20px id="inc"  style="vertical-align:middle;"/></a>
					</td>
					
					<td>Rs <?= $tprice; ?></td>
					<td><a href="javascript:void()" class="del" delid="<?= $arr['id']; ?>"><img src="admin/images/delete.jpg" height=20px width=20px /></a></td>
					</tr>
					
				<?php
					$sn++;
					}
					echo "<tr id='gt'>
							<td colspan=6 align='right'>Grand Total &nbsp&nbsp </td>
							<td colspan=2 align='left'>Rs ".$gprice."</td>
							</tr>";
					?>
							
							<tr>
							<td colspan=8 align='right'><a href='cartcontinue.php?user=<?php if(isset($_SESSION['uid']))
							{
								$user=$_SESSION['uid'];
								echo $user;
							}
							?>'><button style="font-size:20px; background:skyblue;">Continue</button></a></td>
							</tr>
				<?php	
				}
				else
				{
				?>
				 <div style="border:1px solid black; height:40px; line-height:40px; font-weight:bold; text-align:center; font-size:20px; background:beige;">No Items In Your Cart</div>
				<?php
				}
				
				?>
				
				</table>

			</div>

		    
		    	</div>
<?php include("sidebar.php"); ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>

