<?php

include_once "LRzoeken.php";

class nietMeerOpGridTest extends PHPUnit_Framework_TestCase {

    public function testNegatieveGrens() {
        $wz[] = str_split("ac");
        $t = nietMeerOpGrid($wz, -1, 0);
        $this->assertTrue($t);
        $t = nietMeerOpGrid($wz, 100, -1);
        $this->assertTrue($t);
    }
  public function testPostieveGrens() {
        $wz[] = str_split("ac");
        $t = nietMeerOpGrid($wz, 0, 2);
        $this->assertTrue($t);
        
        $t = nietMeerOpGrid($wz, 1,0);
        $this->assertTrue($t);
    }
    public function testPostieveGrens2() {
        $wz[] = str_split("ac");
        $wz[] = str_split("qw");
        $t = nietMeerOpGrid($wz, 0, 2);
        $this->assertTrue($t);
        
        $t = nietMeerOpGrid($wz, 3,0);
        $this->assertTrue($t);
    }
}
