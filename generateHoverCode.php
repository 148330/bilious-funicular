
<?php
function generateHoverCode($woord) {
    // generate code for each word
    // if on id=$woord iets gedaan wordt, dan class=$woord wordt aangepast
    // stel $woord is abc dan
    // $('#abc').mousein(function() { $('.abc').css('color': 'red') });
    echo '${\'#$woord\'}.mousein(function() { ${\'.$woord\'}.css(\'color\', \'red\');    });';
}
