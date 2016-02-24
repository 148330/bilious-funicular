<?php
 
include_once "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    BoBezoeken($ruweWoordzoeker, $w);
}
    function BoBezoeken(Array $ruweWoordzoeker, $w) 
        {
        global $classInformatie;
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    { //Vanaf hier kijkt hij naar het begin letter
                    if (isHetBoBewoordDaar($x, $y, $ruweWoordzoeker, $woordArray)) 
                        { //Vanaf daar zoekt hij de rest van het woord
                        foreach($woordArray as $k => $letter)
                            {
                            $classInformatie[$x + $k][$y][] = $w;
                            } // Hier slaat hij alle informatie op
                        }
                    }
                }
            }        
        } 
    function isHetBoBewoordDaar($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x + $k, $y)) 
                    {
                    return false;
                    }
                    if ($letter != $ruweWoordzoeker[$x + $k][$y]) {
            return false;
        }
    }    //Kijkt of het woord er is, dat doet hij door de foute mogelijkheden buiten te sluiten
            return true;
        }