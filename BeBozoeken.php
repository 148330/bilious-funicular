<?php
 
include_once "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    BeBozoeken($ruweWoordzoeker, $w);
}
    function BeBozoeken(Array $ruweWoordzoeker, $w) 
        {
        global $classInformatie;
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    {
                    if (isHetBeBowoordDaar($x, $y, $ruweWoordzoeker, $woordArray)) 
                        {
                        //regirsteer class
                        //Je wilt nu het zoeken linken met waar je met je muis 
                        //over heen gaat, dit doe je door when mouse over word..
                        //then "voer dit bestand uit" en kleur dit woord.
                        foreach($woordArray as $k => $letter)
                            {
                            $classInformatie[$x - $k][$y][] = $w;
                            }
                        }
                    }
                }
            }        
        } 
    function isHetBeBowoordDaar($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x - $k, $y)) 
                    {
                    return false;
                    }
                if ($letter != $ruweWoordzoeker[$x-$k][$y])
                    return false;
                }
            return true;
        }