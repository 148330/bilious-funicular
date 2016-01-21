<?php

$ruweWoordzoeker = Array(); // van de regels
$woorden = Array(); // woorden
$file_handle = fopen("$file", "r");
while (!feof($file_handle)) {
    $line = fgets($file_handle);
    if (strlen($line) <= 2) {
        // nu komen de woorden
        continue;
    }
    $ruweWoordzoeker[] = $line; // append 
    $woorden[] = $line;
    //echo $line. "<br />";
}
fclose($file_handle);

print "<pre>";
print_r($ruweWoordzoeker);
print_r($woorden);

