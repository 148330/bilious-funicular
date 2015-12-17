<?php

$bestand = "invoer1.txt";
$x = file($bestand);

//print_r($x);
$result = array();
foreach ($x as $line) {
    $y = preg_split('/\W/', $line);
    //print_r($y);
    foreach ($y as $w) {
        if ($w != '') {
            $result[] = $w;
        }
    }
}
print_r($result);
function mijnHash($w) {
    return strlen($w);
}
$collision = array();
foreach($result as $w) {
    $h = mijnHash($w);
    $collision[$h] = $w;            // spldoublelinkedlist $collision[0] = new SplDoublyLinkedList ();
}
print_r($collision);
