<?php

class ruwewoordzoekerTest extends PHPUnit_Framework_TestCase {

    public function testMinNegative() {
        $file = './tests/data/t0.txt';
        include 'leesBestand.php';
        include 'ruwewoordzoeker.php';
        
        $this->assertNotEquals('-',$ruweWoordzoeker[1][0]);
    }
    }