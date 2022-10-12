 	<?php

	 echo " Array Exercise 2 " . "<br>";

	 $large = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
	
    ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	 </head>
	 <body>
	 	<h1 style="color: black; ">Large Cities</h1><br>
        
	 	<?php
	 	for ($i = 0; $i < COUNT($large); $i++) {
	 		echo $large{$i} . ", "; }
	 	?>
	 	
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($large); $i++) {
	 			echo "<li>{$large{$i}}</li>"; }
	 		?>

	 	</ul>
	 		<?php array_push($large, "Los Angeles", "Calcutta", "Osaka", 	   				   "Beijing"); 
            ?>

	 		<?php sort($large); ?>
	 
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($large); $i++) {
	 			echo "<li>{$large{$i}}</li>"; }
	 		?>
	 	</ul>
	 </body>
	 </html>