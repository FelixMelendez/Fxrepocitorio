<html>
	<head>
		<meta charset = "utf-8">
		<title>ejercicio 5</title>
		<LINK REL="stylesheet" TYPE="text/css" HREF="fxstyle.css">
	</head>
	<body>

		<p>5. Desarrolle un script en php que imprima los colores RGB aplicados a las<br>
			abreviaciones que se usan en los estilos css (#f0f, #f93), tome en cuenta que<br>
			solo tomara los valores de 0 a 9 para construir la tabla de colores, cada color<br>
			debe de estar compuesto por 3 valores.</p><br><br>

				<h3>RESULTADO</h3>


				<table>
				<?php
					$cont[0]=0;
					$cont[1]=1;
					$cont[2]=2;
					$cont[3]=3;
					$cont[4]=4;
					$cont[5]=5;
					$cont[6]=6;
					$cont[7]=7;
					$cont[8]=8;
					$cont[9]=9;
					$cont[10]="a";
					$cont[11]="b";
					$cont[12]="c";
					$cont[13]="d";
					$cont[14]="e";
					$cont[15]="f";

						for ($a=0;$a<16;$a++){

							for ($b=0;$b<16;$b++){
								print "<tr>";
								for ($c=0;$c<16;$c++){

									$color=$cont[$a].$cont[$b].$cont[$c];
										print "<td style='background-color:#$color;'># $color";
										print "</td>";
								}
							print "</tr>";
							}
						}
				?>
				</table>
				<br><br>
				<hr>
		<p class="s2">Desarrollador: FELIX IVAN MELENDEZ ALFARO 011914 // SISTEMAS 21 "B" <img src="brook.png" height ="50px"></p> 
	</body>
	</html>