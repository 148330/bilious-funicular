<?php

$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$rand = $letters[array_rand($letters)];
echo "<br>"; 
echo $rand;
//$ruweWoordzoeker = preg_replace("/-/",$rand, $ruweWoordzoeker);
$ruweWoordzoeker = str_replace("-", $rand, $ruweWoordzoeker);