<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 30</title>
</head>

<body>
<h1>Hola que tal</h1>
	<h1>Numeros pares</h1>
	<?php
	$acu=0;
	$num=0;
	while($acu<=29)
	{
		$num++;
		
		$par=$num%2;
		if($par==0)
		{
			echo "$num </br>";
			$acu++;
		}
	}
	?>
</body>
</html>