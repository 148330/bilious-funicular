<?php

$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

$random_letter = array_rand($letters,1);
echo "<br>"; 
echo $random_letter;
$rw = preg_replace("/-+/",$random_letter, $rw);
$rw = str_replace("-","$random_letter","$rw");