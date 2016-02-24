
<?php
function generateKlik ($woord)  {
    return ".click(function() \n{ $('#$woord').css('color','red');"
            //Maakt het woord permanent rood als je er op klikt
            . "\n\$('.$woord').attr('class','geklikt'); \n})\n";
                //Als een letter eenmaal 'vast' staat, dan blijft hij dat ook
//Als je op een woord klikt, dan blijft hij permanent zichtbaar in de tabel
}
function generateMouseIn($woord) {
    return ".mouseenter(function() \n{ \n\$('.$woord').css('background-color', 'red'); \n})\n";
    //Zorgt voor de verandering van achtergrondkleur als er over een woord met de muis heen geschoven word
}
function generateMouseOut($woord) {
    if(".$woord"){
    return ".mouseout(function() { \$('.$woord').css('background-color', 'white'); })\n";
    //Als je er met je muis van een woord afgaat, dan kleurt de achtergrond weer wit
    }
}
function generateHoverCode($woord) {
    // generate code for each word
    // if on id=$woord iets gedaan wordt, dan class=$woord wordt aangepast
    // stel $woord is abc dan
    // $('#abc').mousein(function() { $('.abc').css('color': 'red') });
    echo "\$('#$woord')\n";
    echo generateMouseIn($woord);
    echo generateKlik($woord);
    echo generateMouseOut($woord); 
    echo ';';
    //Voert elke stap uit
}
