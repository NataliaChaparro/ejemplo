<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 31</title>
</head>

<body>
	<h1>Vector array</h1>
	<?php
	$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Nobiembre","Diciembre");
	echo "Mes de: $meses[7] </br>";
	echo "Mes de: $meses[10] </br>";
	echo "Mes de: $meses[0] </br></br>";
	
	$longitud=count($meses);//saca el numero de elementos que hay en el array;
	for($i=0; $i<$longitud; $i++)
	{
		echo $meses[$i];//imprime cada valor del array
		echo "</br>";
	}
	?>
</body>
</html>