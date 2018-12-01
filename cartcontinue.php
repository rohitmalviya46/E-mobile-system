
<?php

$user=$_GET["user"];
if($user!="")
{
	header("location:order.php");
}
else
{
?>


<?php
ob_start();

?>
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
/*----------------------CSS FOR LOGIN FORM---------------------------*/		

.login-page {
  width: 410px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 410px;
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

</style>
	</head>
	<body>
<?php include("captcha.php"); ?>
<?php include("header.php"); 

extract($_POST);
if(isset($login))
{
	if($cap==$hid)
{
	$email=mysqli_real_escape_string($link,htmlentities(trim($email)));
	$pass=mysqli_real_escape_string($link,htmlentities(trim($pass)));
	$pass=sha1($pass);
	$sel=mysqli_query($link,"select * from users where email='$email'");
	$arr=mysqli_fetch_assoc($sel);
	if($email===$arr['email'] && $pass===$arr['password'])
	{	
		session_start();
		$_SESSION['uid']=$arr['name'];
		$_SESSION['semail']=$arr['email'];
		header("location:order.php");
		ob_end_flush();
	}
	else
	{
		$msg="Enter Correct User Name or Password";
	}
	}
}
 $pit= substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTWXYZabcdefghijklmnopqrstwxyz"),0,6);
?>

		    <div class="wrap">
		    <div class="content">

		    	
		    <div class="content-grids">
<div class="login-page">
  <div class="form">

    <form class="login-form" method="post">

	<?php
	  if(isset($_GET['uname']))
	  {
		  $uname=$_GET['uname'];
	  ?>
	  <div style="font-weight:bold; font-size:20px; color:blue;">Registered Successfully : <?= ucwords($uname); ?><br/>Please Login</div>
	  <br/>
	  <?php
	  }
	  ?>
	  
	
	<?php
	if(isset($msg))
	{
	?>
		<div style="font-weight:bold; font-size:20px; color:red;"><?= $msg; ?></div><br/>
	<?php
	}
	?>
	

	  <div class="formtext">Email Id :</div>
      <input type="text" name="email" required placeholder="Enter Email Id"/>
	  <div class="formtext">Password :</div>
      <input type="password" name="pass" required placeholder="Ente Password"/>
      
       <div class="formtext">Captcha</div>
       <input type="text" name="cap" required />
       <div><h2>Enter the contents of images*</h2></div>
       <div style="background-image:url('images/capp.jpg');  width:150px; height: 40px; padding-top:3%; font-size: 20px; color:rgb(255, 255, 255);">
                <?php echo $pit; ?></div>

        <input type="hidden" name="hid" value="<?php echo $pit;  ?>">

      <button name="login">login</button>
<p class="message">Not registered? <a href="registration.php">Create an account</a></p>
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




<?php
}
?>