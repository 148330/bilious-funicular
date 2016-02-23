

$(document).ready(function ()
{
    
    console.log("1");
    <?php
    include "generateHoverCode.php";
    foreach($woorden as $woord)    { 
        generateHoverCode($woord);
        
    }
    ?>
   
});

