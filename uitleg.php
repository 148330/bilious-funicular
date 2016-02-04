<?php
$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
print "<pre>";
$w= str_split("A--B--GFW--H-T-W-G-W");
$oWoord = array();
foreach ($w as $letter) {
    if ($letter == '-') {
        $rand = $letters[array_rand($letters)];
        $oWoord[] = $rand;
    } else {
        $oWoord[] = $letter;
    }
}
//print_r($oWoord);
print implode('', $oWoord);
die();
$w = str_replace('--', 'QA', $w);

print $w;
die();