<?php
$ruweWoordzoeker = Array();
$woorden = Array();
$a = false;
$file_handle = fopen("$file", "r");
//Het inlezen van het tekstbestand
while (!feof($file_handle)) {
    $line = fgets($file_handle);
    if ((strlen($line) > 2) && ($a == false)) {
        $rijArray = Array();
        for ($x = 0; $x < strlen($line) - 2; $x++) {
            $rijArray[] = $line[$x];
        }
        $ruweWoordzoeker[] = $rijArray;
    } elseif (strlen($line) <= 2) {
        $a = true;
        continue;
    } elseif ((strlen($line) > 2) && ($a == true)) {
        $woorden[] = trim($line);
    }
}
fclose($file_handle);

// output
// $woorden[]: array of the words to be found
// $ruweWoordzoeker[][] : array of array (so 2D) of letters

//Stopt de woordzoeker en woordenlijst in een array
//Scheid de woordzoeker van de woorden door de Br