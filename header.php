<!-- ------------------------------------------------------------- -->
<?php include("admin/config/database.php");
session_start();


$sid=session_id();
$sel=mysqli_query($link,"select * from tempcart where sid='$sid' and purchase=0");
$items=mysqli_num_rows($sel);

if(isset($_SESSION['uid']))
{
$un=$_SESSION['uid'];
}
?>

<script>


	$(document).ready(function()
	{
		$("#search").click(function()
		{
			var ser = $("#ser").val();
			var ser = $.trim(ser);
			if(ser!="")
			{
			location.href="search.php?ser="+ser;
			}
		})
	})
	
	
	
	
	$(document).ready(function()
	{
		$("#ser").keyup(function()
		{
			var ser = $(this).val();
			$.post('searchapi.php',{search:ser},function(res)
			{
				$("#tar").html(res);
			})

		})
	})
</script>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				
				<!-- IT IS FOR SEARCH BOX SEARCH RESULT LINK, REMOVE COMMENT HERE AND SEARCH.API NEAR ECHO    
				<input type="text" id="ser" required/>
				<input type="submit" id="search" />
				<font size=4><div id="tar"></div></font> 
				-->
				<input list="tar" id="ser" spellcheck="false" style="height:20px; width:220px; text-transform:capitalize; font-weight:bold; font-size:17px;"/>
					<datalist id="tar">
					
					</datalist>
				<input type="submit" id="search" />
				
				
				
				
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<?php
					if(empty($un))
					{
					?>
					<li><a href="registration.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
					<?php
					}
					else
					{
					?>
					<li><font size=4 color="blue">WELCOME : <?= strtoupper($un); ?></font></li>
						<li><a href="logout.php">Logout</a></li>
					<?php
					}
					?>
					
					
					<!-- <li><a href="myaccount.php">My account</a></li> -->
					<li><a href="cart.php"><span>shopping cart&nbsp;&nbsp;: </span></a><label> 
					<?php
					if($items>0)
					{
					echo $items." items";	
					}
					else
					{
					echo " no items";
					}
					?>
					</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="store.php">Store</a></li>
				
				
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->