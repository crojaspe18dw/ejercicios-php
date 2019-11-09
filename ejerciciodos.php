<!DOCTYPE html>
<html>
<head>
	<title>ejercicio dos</title>
</head>
<body>
	<?php
	//$tamano=$_POST('tamano');
	//$grosor=$_POST('grosor');
	$tamano=1000;

	$lienzo=imagecreatetruecolor($tamano,$tamano);
	$verde=imagecolorallocate($lienzo, red, green, blue);
	imagerectangle($lienzo, $tamano, $tamano, $tamano, $tamano, $verde);
	header('content-Type:image/phg');
	imagepng($lienzo);
	imagedestroy($lienzo);
	?>

</body>
</html>