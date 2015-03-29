<html>
	<head>
		<meta charset = "utf-8">
		<title>ejercicio 3</title>
		<LINK REL="stylesheet" TYPE="text/css" HREF="fxstyle.css">
	</head>
	<body>

		<p>3. Desarrolle un script que al tener 3 valores permita hacer el cálculo de su<br>
			operación cuadrática, aplicar la fórmula , recuerde el formato de salida es de dos
			valores.</p><br><br>

				<h3>RESULTADO</h3>


				<?php
				$a = 1;
				$b = 2;
				$c = -8;

				$xtemp= -($b);

				$x= sqrt(pow($b, 2)-4*($a*$c));

				$x1=($xtemp+$x)/(2*$a);

				$x2=($xtemp-$x)/(2*$a);

				print("tomando los valores a= $a, b= $b y c= $c la funcion cuadratica arroja los siguientes resultados <br><br>");
				print ("X1= $x1 <br><br>");
				print ("X2= $x2 <br><br>");
				?>
		<p class="s2">Desarrollador: FELIX IVAN MELENDEZ ALFARO 011914 // SISTEMAS 21 "B" <img src="brook.png" height ="50px"></p> 
	</body>
	</html>

