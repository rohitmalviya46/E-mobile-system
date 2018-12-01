<!-- ------------------------------------------------------------- -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>E-Mobile Portal System Website E-mobile Portal | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="E-Mobile Portal System iphone web E-mobile Portal, Android web E-mobile Portal, Smartphone web E-mobile Portal, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>


		<style>
			.billing{width:80%; margin-left:10%}
			table{border:1px solid black; width:100%; text-align:center;}
			th,td{border:1px solid black;}
			th{font-weight:bold; font-size:22px; height:40px; vertical-align:middle;}
			td{font-size:20px; height:40px; vertical-align:middle;}
			button{font-size:20px;}
		</style>
		
	</head>
	<body>
	

<?php include("header.php"); 
$sel=mysqli_query($link,"select * from tempcart where sid='$sid' and purchase=0");
?>



		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="billing">
			<br/>
				<?php
				if($row=mysqli_num_rows($sel)>0)
				{
				?>
				<form method="post">
				<table>
					<tr><th colspan=6><font size=6>Your Orders</font></th></tr>
					<tr><th>S.No.</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Action</th></tr>
					<?php
						$sn=1;
						while($arr=mysqli_fetch_assoc($sel))
						{
							$pid=$arr['pid'];
			$sel2=mysqli_query($link,"select * from product where id=$pid");
							$arr2=mysqli_fetch_assoc($sel2);
							$price=($arr2['price']-$arr2['discount']);
							$totprice=($arr['quan']*$price);
							@$grandprice+=$totprice;
							
					?>
						<tr>
						<td><?= $sn; ?></td>
						<td><?= $arr2['mobile_name']; ?></td>
						<td>Rs <?= $price; ?></td>
						<td><?= $arr['quan']; ?></td>
						<td>Rs <?= $totprice; ?></td>
						<td><a href="cart.php" style="color:red;">Edit Order</a></td>
						
						</tr>
						
					<?php
						$sn++;
						}
					?>
					
					<?php
					$semail=$_SESSION['semail'];
	$sel3=mysqli_query($link,"Select * from users where email='$semail'");
				$arr3=mysqli_fetch_assoc($sel3);
					?>
					
				<tr style="font-weight:bold;"><th colspan=4 align="right">Grand Total &nbsp;&nbsp;</th><th colspan=2 align="left">&nbsp;&nbsp; Rs <?= $grandprice; ?></th></tr>
				
				<tr>
				<td colspan=2>Name : </td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<?= strtoupper($arr3['name']); ?></td>
				<td rowspan=5><a href="cartedit.php">Edit Detail</a></td>
				</tr>
				
				<tr>
				<td colspan=2>Contact No. :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<?= $arr3['contact']; ?></td>
				</tr>
				
				<tr>
				<td colspan=2>Address :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<?= strtoupper($arr3['address']); ?></td>
				</tr>
				
				<tr>
				<td colspan=2>City :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<?= strtoupper($arr3['city']); ?></td>
				</tr>
				
				<tr>
				<td colspan=2>Pin Code :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<?= $arr3['pincode']; ?></td>
				</tr>
				
				<tr><td colspan=6><button name="orderconfirm" style="background:lightgreen;">CONFIRM</button></td></tr>
				</table>
				</form>
				<?php
				}
				else
				{
					header("location:404.php");
				}
				?>
			</div>

		    
		    	

		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>



<?php

extract($_POST);
if(isset($orderconfirm))
{
	$email=$_SESSION['semail'];
	
	$seltemp=mysqli_query($link,"select * from tempcart where sid='$sid' and purchase=0");
	
	$orderid="ord".rand();
	while($arrtemp=mysqli_fetch_assoc($seltemp))
	{
		$pid=$arrtemp['pid'];
		$quan=$arrtemp['quan'];
		
		$selproduct=mysqli_query($link,"select * from product where id='$pid'");
		$arrproduct=mysqli_fetch_assoc($selproduct);
		$pname=$arrproduct['mobile_name'];
		$price=($arrproduct['price']-$arrproduct['discount']);
		
		
		$seluser=mysqli_query($link,"select * from users where email='$email'");
		$arruser=mysqli_fetch_assoc($seluser);
		$name=$arruser['name'];
		$contact=$arruser['contact'];
		$address=$arruser['address'];
		$city=$arruser['city'];
		$pincode=$arruser['pincode'];
		
		
				
		mysqli_query($link,"insert into orders (oid, pid, pro_name, price, quantity, user_email, name, contact, address, city, pincode) values ('$orderid', '$pid', '$pname', '$price', '$quan', '$email', '$name', '$contact', '$address', '$city', '$pincode')");
		
		$id=$arrtemp['id'];
		mysqli_query($link,"update tempcart set purchase=1 where id='$id'");
		
		
		$quan=($arrproduct['quantity']-$arrtemp['quan']);
		mysqli_query($link,"update product set quantity='$quan' where id='$pid'");
		
		echo "<script>location.href='orderthanks.php?oid='+'$orderid'</script>";
	}
	
}

?>
