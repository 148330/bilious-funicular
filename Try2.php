<?php
 /*  $woordzoeker2 = [
    	['a', 'd', 'd', 'd', 'd', 'd', 'd', 'p', 'd'],
    	['d', 'a', 'd', 'd', 'd', 'd', 'd', 'a', 'd'],
    	['d', 'd', 'n', 'd', 'd', 'd', 'd', 'n', 'd'],
    	['d', 'd', 'd', 'b', 'd', 'd', 'd', 'd', 'd'],
    	['d', 'd', 'd', 'd', 'a', 'd', 'd', 'd', 'd'],
    	['d', 'd', 'd', 'd', 'b', 'k', 'd', 'd', 'd'],
    ];
   */
   
   $woordzoeker[] = str_split("ddaanpakddddd");
   $woordzoeker[] = str_split("ddaanbakdakdd");
   $woordzoeker[] = str_split("ddpapandddddd");
    $words = [
        "dak",
        "aanbak",
        "pan"
    ];
    /*
    $xPos = 0;
   
    $yPos = 0;
    $wordPos = 0;
    foreach($woordzoeker as $line){
        foreach($line as $char){
            if(checkLetter($char, $wordPos, $words)){
                echo "<br />$char at $xPos, $yPos; <br />";
                searchNeighBors($xPos, $yPos, $woordzoeker);
            }
            $yPos = $yPos + 1;
        }
        $xPos = $xPos + 1;
    }
      */
  include "nietMeerOpGrid.php";
    function isHetLRwoordDaar($i, $j, $woordzoeker, $woordArray) {
        foreach($woordArray as $k => $letter) {
            if (nietMeerOpGrid($woordzoeker, $i, $j + $k)) {
                return false;
            }
            if ($letter != $woordzoeker[$i][$j+$k])
                return false;
        }
        return true;
    }
    
    function LRzoeken(Array $woordzoeker, $woord) {
        $woordArray = str_split(trim($woord));
        foreach($woordzoeker as $i => $rij) {
            foreach($rij as $j => $letter) {
                if ($letter == $woordArray[0]) {
                    if (isHetLRwoordDaar($i, $j, $woordzoeker, $woordArray)) {
                        print "$woord gevonden op " . $i . " " . $j; 
                        //regirsteer class
                    } 
                }
            }
        }        
    }
    foreach($words as $w) 
        LRzoeken($woordzoeker, $w);
    /*
    function searchNeighbors($xPos, $yPos, $woordzoeker){
        $neighbors = [
            [$xPos - 1  ,   $yPos - 1],
            [$xPos - 1  ,   $yPos + 0],    
            [$xPos - 1  ,   $yPos + 1], 
            [$xPos + 0  ,   $yPos - 1],   
            [$xPos + 0  ,   $yPos + 1],   
            [$xPos + 1  ,   $yPos - 1],  
            [$xPos + 1  ,   $yPos + 0], 
            [$xPos + 1  ,   $yPos + 1],
        ];
        foreach($neighbors as $coords){
            $coordX = $coords[0];
            $coordY = $coords[1];
            if(isset($woordzoeker[$coordX][$coordY])){
                $letter = $woordzoeker[$coordX][$coordY];
                echo"$coordX, $coordY is $letter\n";
            }
        }
    }
    
    function checkLetter($char, $position, $words){
        foreach($words as $word){
            if($char == $word[$position]){
                return true;
            }
        }
        return false;
    }
     
     */
?>
