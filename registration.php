<?php
ob_start();

?>

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
/*----------------------CSS FOR LOGIN FORM---------------------------*/		

.login-page {
  width: 560px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 560px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 18px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

.formtext{
	text-align:left; 
	color:#43A047; 
	font-weight:bold; 
	font-size:20px;
		}
//*******************************************************
</style>
	</head>
	<body>
<?php include("header.php"); 



extract($_POST);
if(isset($sub))
{
	$name=mysqli_real_escape_string($link,htmlentities(trim($name)));
	$email=mysqli_real_escape_string($link,htmlentities(trim($email)));
	$pass=mysqli_real_escape_string($link,htmlentities(trim($pass)));
	$cpass=mysqli_real_escape_string($link,htmlentities(trim($cpass)));
	$cn=mysqli_real_escape_string($link,htmlentities(trim($cn)));
	$add=mysqli_real_escape_string($link,htmlentities(trim($add)));
	$city=mysqli_real_escape_string($link,htmlentities(trim($city)));
	$pcode=mysqli_real_escape_string($link,htmlentities(trim($pcode)));
	//$cap=mysqli_real_escape_string($link,htmlentities(trim($cap)));
	
	
	$tmp=$_FILES['att']['tmp_name'];
	$fn=$_FILES['att']['name'];
	$ext=end(explode('.',$fn));
	$fnn=rand().".jpg";
	
	
	//if($cap===$hid)
	//{
		if($pass===$cpass)
		{		
			$pass=sha1($pass);
			
			if($ext=="jpg" || $ext=="png")
			{
				if(move_uploaded_file($tmp,"userimages/".$fnn))
				{
					if(mysqli_query($link,"insert into users (name, email, password, contact, address, city, pincode,photo) values ('$name','$email','$pass','$cn','$add','$city','$pcode','$fnn')"))
					{
					header("location:login.php?uname=$name");
					ob_end_flush();
					}
					else
					{
					$msg="User Name Already Exist";
					}
						
				}
				else
				{
					$msg="Photo Upload Error";
				}
			}
			else
			{
				$msg="Only jpg or png photo supported";
			}
		}
		else
		{
			$msg="Password and Confirm Password are not matching";
		}
	//}
	// else
	// {
	// 	$msg="Enter Correct Sum";
	// }
	
}
?>

		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content-grids">
<div class="login-page">
  <div class="form">

    <form class="login-form" method="post" enctype="multipart/form-data" autocomplete="off">
	<?php
	if(isset($msg))
	{
	?>
		<div style="font-weight:bold; font-size:20px; color:red;"><?= $msg; ?></div><br/>
	<?php
	}
	?>
		<font size=6 color=black><u>Registration Form</u></font>
		<br/><br/>
	  <div class="formtext">Name :</div>
     <input type="text" name="name"  required placeholder="Enter User Name"/>
	  
	  <div class="formtext">Email :</div	>
      <input type="email" name="email" required placeholder="Enter E-mail Id"/>
	  
	  <div class="formtext">Password :</div>
	  <input type="password" name="pass" required placeholder="Enter Password"/>
	  
	  <div class="formtext">Confirm Password :</div>
	  <input type="password" name="cpass" required placeholder="Re-Enter Password"/>
	  
	  <div class="formtext">Contact No. :</div	>
      <input type="text" name="cn" required placeholder="Enter User Name"/>
	  
	  <div class="formtext">Address :</div	>
      <input type="text" name="add" required placeholder="Enter User Name"/>
	  
	  <div class="formtext">City :</div	>
      <input type="text" name="city" required placeholder="Enter User Name"/>
	  
	  <div class="formtext">Pincode :</div	>
      <input type="text" name="pcode" required placeholder="Enter User Name"/>
	  
	  <div class="formtext">Photo :</div	>
      <input type="file" name="att" required placeholder="Enter User Name"/>
	  
	  <!-- <br/><br/>
	  <div class="formtext"><font size=5><?= $patt; ?></font></div>
      <input type="text" name="cap"  required placeholder="Enter Sum"/>
	  
      <input type="hidden" name="hid" value="<?= $sum; ?>"/> -->
	  
	  <br/><br/>
      <button name="sub">Register</button>

    </form>
  </div>
</div>

		    
		    	</div>
<?php include("sidebar.php"); ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
<?php include("footer.php"); ?>
	</body>
</html>

