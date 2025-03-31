<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Probando HOla mundo</title>
</head>

<body>

<?php
	echo "HOLA BIENVENIDO actualizate con un f5 lamp!";
	//salto lineaecho "<br>";
// cambio desde remoto
	// comentario una sola linea
	/*Comentarios varias lineas */
	# Comentario consola
	// Variable string
	$prueba = "variable prueba";
	// Variable integer
	$numero = 5;
	$Frase = "la frase es $prueba y $numero";
	$ProfesorTrue = true;
	$ProfesorFalse = false;


	print "<br/>Esto linea la hago con print";
	print "<br/>Esto linea la hago con print para hacer otro commit $prueba$numero<br/>";
	print $Frase;
	print "<br/>Contaneo texto con variable" . $Frase;
	print "<br/>Si el booleano es True mostrara1: ". $ProfesorTrue;
	print "<br/>Si el booleano es False no mostrara nada: ". $ProfesorFalse;
	print "<br/>Si el booleano es verdadero sale: " . json_encode ($ProfesorTrue);
	print "<br/>Si el booleano es falso sale: " . json_encode ($ProfesorFalse);
	echo "<br/>";

	// Constantes

	const PI = 3.14;
	// PI == 100; // Removed as it serves no purpose
	echo PI;

	define ("nombre","pepe");
	// nombre == "pepa"; // Removed as it serves no purpose
	echo "<br/>";
	echo nombre;
	echo "<br/>";

?>
<a href="destino.php?nombre=Adrian&cargo=Presidente">Pasar las variables destino a .php</a>
<?php
	// Variables paso URL


?>

</body>
</html>
