<?php
 
include_once "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    VijfZoeken($ruweWoordzoeker, $w);
}
    function VijfZoeken(Array $ruweWoordzoeker, $w) 
        {
        global $classInformatie;
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    {
                    if (Rondkijken($x, $y, $ruweWoordzoeker, $woordArray)) 
                        {
                        foreach($woordArray as $k => $letter)
                            {
                            $classInformatie[$x +- $k][$y -+ $k][] = $w;
                            }
                        }
                    }
                }
            }        
        } 
    function Rondkijken($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x, $y + $k)) 
                    {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x][$y + $k]) {
                        return false;
                    } 
                    elseif (nietMeerOpGrid($ruweWoordzoeker, $x, $y - $k)) {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x][$y - $k]) {
                        return false;
                    } elseif (nietMeerOpGrid($ruweWoordzoeker, $x + $k, $y - $k)) {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x + $k][$y - $k]) {
                        return false;
                    } elseif (nietMeerOpGrid($ruweWoordzoeker, $x - $k, $y - $k)) {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x - $k][$y - $k]) {
                        return false;
                    } elseif (nietMeerOpGrid($ruweWoordzoeker, $x + $k, $y + $k)) {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x + $k][$y + $k]) {
                        return false;
                    } elseif (nietMeerOpGrid($ruweWoordzoeker, $x - $k, $y + $k)) {
                        return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x - $k][$y + $k]) {
                        return false;
                    }
                }
                return true;
            }
            
        // de functie laten herroepen totdat alles true is
        //  Hier moet de recursive function komen
            // function fact($n) {
               //if ($n === 0) { // our base case
               //   return 1;
               //}
               //else {
               //   return $n * fact($n-1); // <--calling itself.
               //}
              //}