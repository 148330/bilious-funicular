<?php
 
include "nietMeerOpGrid.php";
foreach($woorden as $w) 
{
    LRzoeken($ruweWoordzoeker, $w);
}
    function LRzoeken(Array $ruweWoordzoeker, $w) 
        {
        $woordArray = str_split(trim($w));
        foreach($ruweWoordzoeker as $x => $rij) 
            {
            foreach($rij as $y => $letter) 
                {
                if ($letter == $woordArray[0]) 
                    {
                    if (isHetLRwoordDaar($x, $y, $ruweWoordzoeker, $woordArray)) 
                        {
                        $letter = "<div id=$w>".$letter."</div>";
                        //regirsteer class
                        }
                    }
                }
            }        
        } 
    function isHetLRwoordDaar($x, $y, $ruweWoordzoeker, $woordArray) 
        {
            foreach($woordArray as $k => $letter) 
                {
                if (nietMeerOpGrid($ruweWoordzoeker, $x, $y + $k)) 
                    {
                    return false;
                    }
                if ($letter != $ruweWoordzoeker[$x][$y+$k])
                    return false;
                }
            return true;
        }