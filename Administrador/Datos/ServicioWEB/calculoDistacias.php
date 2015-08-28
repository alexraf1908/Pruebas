<?php

function distanciaGeodesica($lat1, $long1, $lat2, $long2){ 

$degtorad = 0.01745329; 
$radtodeg = 57.29577951; 

$dlong = ($long1 - $long2); 
$dvalue = (sin($lat1 * $degtorad) * sin($lat2 * $degtorad)) 
+ (cos($lat1 * $degtorad) * cos($lat2 * $degtorad) 
* cos($dlong * $degtorad)); 

$dd = acos($dvalue) * $radtodeg; 

$miles = ($dd * 69.16); 
$km = ($dd * 111.302); 

$metros=$km/0.0010000;

return $metros; 


}

// pull cords out of database

echo "distancia :".  distanciaGeodesica(-8.065439, -78.992054 ,-8.072342, -78.994170);

?>