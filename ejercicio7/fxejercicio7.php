<?php
$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$resp = $_POST["resp"];



if ($resp == "Cee") {
	$resp=sqrt((pow($a,2))+(pow($b,2)));
	print("el valor de C es: $resp");
}elseif ($resp == "Bee") {
	$resp=sqrt((pow($c,2))-(pow($a,2)));
	print("el valor de B es: $resp");
}else{
	if ($resp=="Aaa") {
		$resp=sqrt((pow($c,2))-(pow ($a,2)));
	print("el valor de A es: $resp");
	}

}
