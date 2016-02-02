<?php


$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
print "<pre>";
$s= str_split($rw);
$oWoord = array();
foreach ($s as $letter) {
    if ($letter == '-') {
        $rand = $letters[array_rand($letters)];
        $oWoord[] = $rand;
    } else {
        $oWoord[] = $letter;
    }
}
//print implode('', $oWoord);
//print implode('', $w);
//echo "<br>"; 
//echo $rand;
//$ruweWoordzoeker = preg_replace("/-/",$rand, $ruweWoordzoeker);
//$ruweWoordzoeker = str_replace("-", $rand, $ruweWoordzoeker);