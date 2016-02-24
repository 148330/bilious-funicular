<?php

$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

for($x = 0; $x < count($ruweWoordzoeker); $x++) {
    for($y = 0; $y < count($ruweWoordzoeker[$x]); $y++)
    {
        if ($ruweWoordzoeker[$x][$y] == '-')
        {
            $ruweWoordzoeker[$x][$y] = $letters[array_rand($letters)];
        }
    }
}
// input : $ruweWoordzoeker
// output: $ruweWoordzoeker
// Alle '-'  in een woordzoeker worden vervangen door een willekeurige letter