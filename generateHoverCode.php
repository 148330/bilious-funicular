
<?php
function generateMouseIn($woord) {
    return ".mouseenter(function() \n{ \n\$('.$woord').css('color', 'red'); \n})\n";
}
function generateMouseOut($woord) {
    return ".mouseout(function() { \$('.$woord').css('color', 'black'); })\n";
}
function generateHoverCode($woord) {
    // generate code for each word
    // if on id=$woord iets gedaan wordt, dan class=$woord wordt aangepast
    // stel $woord is abc dan
    // $('#abc').mousein(function() { $('.abc').css('color': 'red') });
    echo "\$('#$woord')\n";
    echo generateMouseIn($woord);
    echo generateMouseOut($woord);
    echo ';';
}
