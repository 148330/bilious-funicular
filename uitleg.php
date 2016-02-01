<?php

print "<pre>";
$w= str_split("a--b");
$oWoord = array();
foreach ($w as $letter) {
    if ($letter == '-') {
        $oWoord[] = 'A';
    } else {
        $oWoord[] = $letter;
    }
}
print_r($oWoord);
print implode('', $oWoord);
die();
$w = str_replace('--', 'QA', $w);

print $w;
die();