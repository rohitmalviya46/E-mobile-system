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
	
<script>

	$(document).ready(function()
	{
		$(".cartt").click(function()
		{
			var pid = $(this).attr("pid");
			var hquan = $("#hquan").val();
			$.post('admin/api.php',{proid:pid,hquan:hquan},function(res)
			{
				alert(res);
				
				location.reload();
			})
		
		})
	})
</script>
<?php 

include("header.php"); 







$ser=$_GET['ser'];
$ser=mysqli_real_escape_string($link,htmlentities(trim($ser)));
if($ser!=="")
{
?>

		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content-grids">

		    	<h4>Search Mobiles</h4>
		    	<div class="section group">
		<?php
		
	
		
		$sel=mysqli_query($link,"select * from product where mobile_name like'$ser%' or category like '$ser%' or colour like '$ser' ");
		if(mysqli_num_rows($sel)>0)
		{
			while($arr=mysqli_fetch_assoc($sel))
			{
			?>
					
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <a href="productdetails.php?pid=<?= $arr['id']; ?>""><img src="admin/images/<?= $arr['image']; ?>" height=400></a>
					 <a href="productdetails.php?pid=<?= $arr['id']; ?>""><?= $arr['mobile_name']; ?></a>
					 <h3 style="text-decoration:line-through">Rs <?= $arr['price']; ?></h3>
					 <h3>Rs <?= $arr['discount']; ?> Off<br/>
					Now Rs <?php echo ($arr['price']-$arr['discount']); ?>
					 </h3>
					 <ul>
					 <?php
					 if($arr['quantity']>0)
					 {
					 ?>
					 	<li><a  class="cart cartt" href="javascript:void()" pid="<?= $arr['id'] ?>"> </a></li>
						<input type="hidden" id="hquan" value="1"/>
					 	<li><a  class="i" href="productdetails.php?pid=<?= $arr['id']; ?>"> </a></li>
					<?php
					 }
					 else
					 {
					 ?>
							<li style="color:indianred; background:beige;">Out Of <br/>Stock</li><br/>
							
							
					 <?php
					 }
					 ?>
					 </ul>
				</div>
			<?php
			}
			
		}
		else
		{
			echo "<br/><br/><font size=5>No Result Found</font>";
		}
			?>
		


			</div>

		    
		    	</div>
<?php include("sidebar.php"); ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>

<?php
}
else
{
	header("location:404.php");
}
?>


	</body>
</html>

