<html>
	<head>
		<meta charset = "utf-8">
		<title>Formulario ejercicio 7</title>
		<LINK REL="stylesheet" TYPE="text/css" HREF="fxstyle.css">
	</head>
	<body>

		<p>7. cree un script en php que calcule el teorema de pitágoras investigue la formula.</p><br><br>

				<h3>RESULTADO</h3>

		<form name="formularioDatos" method="POST" action="fxejercicio7.php">
			<tr>
				<td>
					Seleccione el valor que desea obtener:
				</td><br>
				<td>
					C: <input type="radio" name="resp" value="Cee" checked>
					B: <input type="radio" name="resp" value="Bee">
					A: <input type="radio" name="resp" value="Aaa">
					<br>
				</td>
				<td>
					INGRESE LOS SIGUIENTES VALORES (solo los necesarios para operar):
				</td><br>
				<td>
					VALOR DE A:
				</td>
				<td>
					<input type="text" name="a">
				</td><BR>
				<td>
					VALOR DE B:
				</td>
				<td>
					<input type="text" name="b">
				</td><br>
				
				<td>
					VALOR DE C:
				</td>
				<td>
					<input type="text" name="c">
				</td><br>
				<td colspam="2">
					<input type="submit" value='Calcular'>
				</td>
			</tr>
		</form><br><br><br>
		<p class="s2">Desarrollador: FELIX IVAN MELENDEZ ALFARO 011914 // SISTEMAS 21 "B" <img src="brook.png" height ="50px"></p> 
	</body>
	</html>