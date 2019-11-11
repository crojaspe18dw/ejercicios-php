<!DOCTYPE html>
<html>
<head>
	<title>ejercicio dos</title>
	<style type="text/css">
		<?php
	$tamano=$_POST['tamano'];
	$grosor=$_POST['grosor'];

	$tamano=$tamano."px";
	$grosor=$grosor."px";
	?>
		div{
			border: <?php echo $grosor; ?> solid black;
			width: <?php echo $tamano  ?>;
			height: <?php echo $tamano  ?>;
			background-color: green;
			

		}

	</style>
</head>
<body>
	
	<div>
		
	</div>

</body>
</html>