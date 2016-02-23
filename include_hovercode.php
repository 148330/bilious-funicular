

$(document).ready(function ()
{
    
    <?php
    include "generateHoverCode.php";
    foreach($woorden as $woord)    { 
        generateHoverCode($woord);
        
    }
    ?>
   
});

