<?php
 

    function nietMeerOpGrid($wz, $x, $y) {
        // stel x,y = -1, 0) dan fout
        // stel x,y = 0, 100 fout als breedte 99 is 
         if ($x < 0){ 
            return true;
        }
        if($x >= count($wz)) {
            return true;
        }
        if ($y < 0){
            return true;
        }
        if($y >= count($wz[0])){
            return true;
        }
        return false;
    }
?>
   