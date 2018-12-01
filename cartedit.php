<!-- ------------------------------------------------------------- -->

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
				
				<form method="post"action="">
				<table>
					
					
					<?php
				    	$semail=$_SESSION['semail'];
	                    $sel3=mysqli_query($link,"Select * from users where email='$semail'");
				        $arr3=mysqli_fetch_assoc($sel3);
					?>
					<input type="hidden" value="<?= $arr3['id']; ?>"name="id">
				<tr>
				<td colspan=2>Name : </td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?= strtoupper($arr3['name']); ?>"></td>
				<!--td rowspan=5><a href="cartedit.php">Edit Detail</a></td-->
				</tr>
				
				<tr>
				<td colspan=2>Contact No. :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<input type="text" name="mobile" value="<?= $arr3['contact']; ?>"></td>
				</tr>
				
				<tr>
				<td colspan=2>Address :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<input type="text" name="addr" value="<?= strtoupper($arr3['address']); ?>"></td>
				</tr>
				
				<tr>
				<td colspan=2>City :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<input type="text" name="city" value="<?= strtoupper($arr3['city']); ?>"></td>
				</tr>
				
				<tr>
				<td colspan=2>Pin Code :</td>
				<td colspan=3 >&nbsp;&nbsp;&nbsp;<input type="text" name="pin" value="<?= $arr3['pincode']; ?>"></td>
				</tr>
				
				<tr><td colspan=6><button name="edit" style="background:lightgreen;">Edit</button></td></tr>
				</table>
				</form>
				
			</div>

		    
		    	

		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>



<?php

extract($_POST);
if(isset($edit))
{
	$id=$_POST['id'];
	$nm=$_POST['name'];
	$mob=$_POST['mobile'];
	$addr=$_POST['addr'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
		mysqli_query($link,"update users set name='$nm', contact='$mob', address='$addr',city='$city', pincode='$pin' where id='$id'");
		
		
		
		echo "<script>window.location='order.php'</script>";
	}
	


?>
