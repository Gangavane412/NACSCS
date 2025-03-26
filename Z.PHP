<?php
define ("num", 100);
echo (num);


$city = ["pune","mumbai", "satara" ];

$city2=['newasa'];


$city1=[
"a"=>array("pune", "mumbai"),
"b"=>array("syx", "prz")
]

$newArray= array_replace($city, $city2);

echo "<pre>";
print_r($newArray);
echo "</pre>";




?>