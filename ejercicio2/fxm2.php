<?php
$metros = $_GET['dato'];
$cm=$metros*100;
$mm=$metros*1000;
$pulg=$metros*39.370;
$km=$metros/1000;

print ("$metros. m equivale a: <br><br>");
print ("$cm. cm <br>");
print ("$mm. mm <br>");
print ("$pulg. inch <br>");
print ("$km. Km");	
				