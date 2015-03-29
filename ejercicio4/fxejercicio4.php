<?php
$dia= $_GET['dato'];

	if ($dia == "lunes" or $dia == "LUNES") {
		print("EL DESCUENTO APLICADO ES DEL 25% A LA COMPRA TOTAL");
	}else {
		if ($dia == "martes" or $dia == "MARTES") {
		print("10% A LAS COMPRAS AL CREDITO");
		} if ($dia == "miercoles" or $dia == "MIERCOLES" or $dia == "viernes" or $dia == "VIERNES") {
			print("20% de descuento solo de contado");
		}else{
			if ($dia == "jueves" or $dia == "JUEVES" or $dia == "sabado" or $dia == "SABADO") {
				print("no hay oferta");	
			}else{
				if ($dia == "domingo" or $dia=="DOMINGO") {
					print("50% de descuento si lleva un producto marcado como especial.");

				}else
				print("el dato ingresado no es valido");

			}
		}
	}

