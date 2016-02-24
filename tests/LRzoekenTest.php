<?php
   
    $file = './tests/data/t0.txt';
    include "leesBestand.php";
    include "ruwewoordzoeker.php";
    include "LRzoeken.php";
class LRzoekenTest extends PHPUnit_Framework_TestCase {
    
    public function testLRzoeken() {
        //$this->assertEquals('a', $w[0]);
        //$this->assertEquals('d', $w[3]);
        //$this->assertEquals('abcdefg',$classinformatie[0][3][]);
    }
    
    public function testisHetLRwoordDaar(){
        //$this->assertFalse(nietMeerOpGrid($ruweWoordzoeker, 3, 9));
        //$this->assertFalse('c',$ruweWoordzoeker[1][3]);
    }
    }

