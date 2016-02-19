<?php

//include_once 'deEchteInlezen.php';


class leesBestandTest extends PHPUnit_Framework_TestCase {

    public function testHasCreatedBothArrays() {
        // simple, included code has
        $file = './tests/data/t0.txt';
        include 'leesBestand.php';

        print_r($ruweWoordzoeker);
        $this->assertTrue(is_array($ruweWoordzoeker));
        $this->assertEquals(2, count($ruweWoordzoeker));
        $this->assertEquals('a', $ruweWoordzoeker[0][1]);
        print_r($woorden);
        $this->assertEquals(1, count($woorden));
        $this->assertEquals('ab', $woorden[0]);
    }

}
