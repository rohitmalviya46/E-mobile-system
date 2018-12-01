
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
						<?php
						$sel=mysqli_query($link,"select * from category");
						while($arr=mysqli_fetch_assoc($sel))
						{
							
						?>
					 <li><a href="category.php?cname=<?= $arr['cname']; ?>"><?= ucwords($arr['cname']); ?></a></li>
						<?php
						}
						?>

						</ul>
		    	</div>