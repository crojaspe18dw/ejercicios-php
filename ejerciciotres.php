<!DOCTYPE html>
<html>
<head>
	<title>ejercicio tres</title>
</head>
<body>
	<?php
	$b=0;
	for ($i=0; $i <= 19; $i++) { 
		$b=$b+1;
		$array[$i]=$b;
	}
	echo "array sin cambiar <br><br>";
	foreach ($array as $key => $value) {
		echo $value ."<br>";

	}
	foreach ($array as $key => $value) {
		if ($key==19) {
			$array[0]=$value;
		}else
			$array[$key+1]=$value;
	}
	echo "array cambiado <br><br>";
	foreach ($array as $key => $value) {
		echo $value ."<br>";

	}
	?>

		

</body>
</html>