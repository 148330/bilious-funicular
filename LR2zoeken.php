<?php
 
include_once "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    LR2zoeken($ruweWoordzoeker, $w);
}
    function LR2zoeken(Array $ruweWoordzoeker, $w) 
        {
        global $classInformatie;
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    {
                    if (isHetLR2woordDaar($x, $y, $ruweWoordzoeker, $woordArray)) 
                        {
                        foreach($woordArray as $k => $letter)
                            {
                            $classInformatie[$x + $k][$y + $k][] = $w;
                            }
                        }
                    }
                }
            }        
        } 
    function isHetLR2woordDaar($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x + $k, $y + $k)) 
                    {
                    return false;
                    }
                if ($letter != $ruweWoordzoeker[$x + $k][$y+$k])
                    return false;
                }
            return true;
        }