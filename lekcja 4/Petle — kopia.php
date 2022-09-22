<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dawid Petrykowski</title>
</head>
<body>

	<?php
		
		for($wysokość = 1; $wysokość <= 5; ++$wysokość)
		{
			
			for($szerokość = 1; $szerokość <= 4; ++$szerokość)
			{
				if($wysokość == 1 OR $wysokość == 5)
				{
					echo "*";
				}
				
				elseif($szerokość == 1 OR $szerokość == 4)
				{
					echo "*";
				}
				
				else
				{
					echo "_";
				}
			}
			
			echo "<br>";
			
		}
		
	?>


</body>