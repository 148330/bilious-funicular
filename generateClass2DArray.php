<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

foreach($ruweWoordzoeker as $x => $rij) {
    foreach($rij as $y => $letter) {
        $classInformatie[$x][$y] = array();
    }
}

//array_push($classInformatie[0][1], $woorden);
//print_r($classInformatie[0][1]);