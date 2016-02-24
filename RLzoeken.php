<?php
 
include_once "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    RLzoeken($ruweWoordzoeker, $w);
}
    function RLzoeken(Array $ruweWoordzoeker, $w) 
        {
        global $classInformatie;
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    { //Vanaf hier kijkt hij naar het begin letter
                    if (isHetRLwoordDaar($x, $y, $ruweWoordzoeker, $woordArray)) 
                        { //Vanaf daar zoekt hij de rest van het woord
                        foreach($woordArray as $k => $letter)
                            {
                            $classInformatie[$x][$y - $k][] = $w;
                            } // Hier slaat hij alle informatie op
                        }
                    }
                }
            }        
        } 
    function isHetRLwoordDaar($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x, $y - $k)) 
                    {
                    return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x][$y - $k]) {
            return false;
        }
    }  //Kijkt of het woord er is, dat doet hij door de foute mogelijkheden buiten te sluiten
            return true;
        }