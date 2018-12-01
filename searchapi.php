<html>
	<head>
		<style>
			a{text-decoration:none; color:blue;}
		</style>
	</head>
</html>
<?php

include("admin/config/database.php");


if(isset($_POST['search']))
{
	$search=trim($_POST['search']);
	if(!empty($search))
	{
		$sel=mysqli_query($link,"select mobile_name from product where mobile_name like '$search%'");
		while($arr=mysqli_fetch_assoc($sel))
		{
			$mn=$arr['mobile_name'];
			
			
			echo "<a href='cart.php'><option>$mn</option></a>";
		}
	}
}

?>