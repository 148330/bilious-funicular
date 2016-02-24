<?php
   
    $file = './tests/data/t0.txt';
    include "leesBestand.php";
    include "ruwewoordzoeker.php";
    include "LRzoeken.php";
class LRzoekenTest extends PHPUnit_Framework_TestCase {
    
    public function testLRzoeken() {
        $wz[] = str_split("-abcdefg--------");
        $wz[] = str_split("----------------");
        $wo = "abcdefg";
        $w = LRzoeken($wz, $wo);
        
        $this->assertEquals($w, $calssinformatie[0][3]);
    }
    
    public function testisHetLRwoordDaar(){
        //$this->assertFalse(nietMeerOpGrid($ruweWoordzoeker, 3, 9));
        //$this->assertFalse('c',$ruweWoordzoeker[1][3]);
    }
    }

