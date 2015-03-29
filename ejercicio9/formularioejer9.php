<html>
	<head>
		<meta charset = "utf-8">
		<title>Formulario ejercicio 9</title>
		<LINK REL="stylesheet" TYPE="text/css" HREF="fxstyle.css">
	</head>
	<body>

		<p>9. Desarrolle un script en php que imprima los datos almacenados en un arreglo el<br>
		cual debe de contener la siguiente estructura:</p><br><br>

				<h3>RESULTADO</h3>

				<?php
				$datos = array('nombre'=>'FELIX',
						'apellido'=>'MELENDEZ',
						'municipio'=>'ZACATECOLUCA',
						'casa'=>'23349865',
						'telefono'=>"79864569");
				?>
				<table border="1px">
					<tr>
						<td>nombre:
						</td>
						<td>
							<?php
							print $datos['nombre'];
							
							?>
						</td>
					</tr>
					<tr>
						<td>apellido:
						</td>
						<td>
							<?php
							print $datos['apellido'];
							
							?>
						</td>
					</tr>
					<tr>
						<td>municipio:
						</td>
						<td><?php
							print $datos['municipio'];
							
							?>
						</td>
						
					</tr>
					<tr>
					<td>telefono:
						</td>
						
						<td>
						<table border="1px">	
							<tr>
								<td>casa:
								</td>
								<td><?php
							print $datos['casa'];
							
							?>
								</td>
							</tr>
							<tr>
								<td>Celular:
								</td>
								<td><?php
							print $datos['telefono'];
							
							?>
								</td>
							</tr>
							</table>
						</td>
					
					</tr>
				</table>
		<p class="s2">Desarrollador: FELIX IVAN MELENDEZ ALFARO 011914 // SISTEMAS 21 "B" <img src="brook.png" height ="50px"></p> 
	</body>
	</html>