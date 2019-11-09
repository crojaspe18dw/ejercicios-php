<!DOCTYPE html>
<html>
<head>
	<title>ejercicio cuatro</title>
	<style type="text/css">
		#azul{
			color: blue;
		}
	</style>
</head>
<body>
	<?php
	for ($i=0; $i <= 9; $i++) { 
		$A[$i]=rand( 0 , 1);
		$B[$i]=rand( 0 , 1);
		$C[$i]=rand( 0 , 1);
	}
	echo "A:  ";
	foreach ($A as $key => $value) {
		echo $value ."    ";
	}
	echo "<br>";
	echo "B:  ";
	foreach ($B as $key => $value) {
		echo $value ."    ";
	}
	echo "<br>";
	echo "C:  ";
	foreach ($C as $key => $value) {
		echo $value ."    ";
	}
	for ($i=0; $i <= 9; $i++) { 
		if ($A[$i]==$B[$i]) {
			$R[$i]=$A[$i];
		}
		elseif ($A[$i]==$C[$i]) {
			$R[$i]=$A[$i];
		}
		elseif ($B[$i]==$C[$i]) {
			$R[$i]=$B[$i];
		}
		elseif ($A[$i]==$B[$i] && $B[$i]==$C[$i]) {
			$R[$i]=$A[$i];
		}
	}
	echo "<br>";
	echo "<p id='azul'>R:  ";
	foreach ($R as $key => $value) {
		echo $value ."     ";
	}
	echo "</p>";





	?>

</body>
</html>