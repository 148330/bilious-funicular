
<?php
function generateHoverCode($woord) {
    echo '${\'#woord\'}.mousein(function() { ${\'.woord\'}.css(\'color\', \'red\');    });';
}
