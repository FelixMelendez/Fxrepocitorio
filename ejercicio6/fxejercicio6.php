<?php
$num = $_GET['numero']+1;

for ($i=1; $i < $num ; $i++) { 
print("<br>TABLA DEL $i<br>");

	for ($j=1; $j <= 10 ; $j++) { 
		$resp=$i*$j;
		print ("$i x $j = $resp<br>");
	}
}