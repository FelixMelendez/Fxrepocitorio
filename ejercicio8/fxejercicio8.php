<?php
$cont=0;
$cont2=1;
echo("SUCECION FIBONACCI DESDE EL 0 HASTA EL 1000<BR><BR>");
echo("$cont <br>");
for ($i=0; $i <17 ; $i++) { 
	
	$sum=$cont+$cont2;
	$cont2=$cont;
	$cont=$sum;
	print("$sum<br>");
}