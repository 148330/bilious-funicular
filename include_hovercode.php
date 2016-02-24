

$(document).ready(function ()
{
    
    <?php
    include "generateHoverCode.php";
    foreach($woorden as $woord)    { 
        generateHoverCode($woord);
        //Voert per woord generate hovercode uit
        //Voert de functie van "GenerateHovercode.php" uit, zorgt voor
        //het kleuren van de achtergrond van de woordzoeker wanneer er met de
        //muis over een woord geschoven wordt
    }
    ?>
   
});

