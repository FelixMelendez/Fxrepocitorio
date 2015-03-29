<html>
	<head>
		<meta charset = "utf-8">
		<title>ejercicio 1</title>
		<LINK REL="stylesheet" TYPE="text/css" HREF="fxstyle.css">
	</head>
	<body>

		<p>1. Cree un script en php que imprima un mensaje usando variables las cuales<br>
			formaran una dirección de residencia, la cual se deberá separar por calle,<br>
			colonia, numero de casa, municipio y departamento, la salida impresa se debe<br>
			de realizar con printf.</p><br><br>

				<h3>RESULTADO</h3>


				<?php
					$calle='8av norte';
					$colonia=' barrio analco';
					$ncasa= 1;
					$muni='zacatecoluca';
					$depa='la paz';

					printf("direccion: %s casa numero ,%s, %s, %s, %s", $calle, $ncasa , $colonia, $muni , $depa);
				?>
				<br><br>
				<hr>
		<p class="s2">Desarrollador: FELIX IVAN MELENDEZ ALFARO 011914 // SISTEMAS 21 "B" <img src="brook.png" height ="50px"></p> 
	</body>
	</html>