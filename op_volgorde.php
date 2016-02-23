<?php

$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
echo "<table border='1px solid black' style='width: 55%' 'height= 100%'>";
foreach ($ruweWoordzoeker as $x => $rij) {
    echo "<tr>";
    foreach ($rij as $y => $letter) {
       // $classInfo = haalClassOpVoor($i, $j); // bv class='kelk  olifant'
        $classInfo = "";
        if (isset($classInformatie[$x][$y])) {
            $classInfo = "class='" . implode(' ', $classInformatie[$x][$y]) . "'";
        }
        echo "<td $classInfo>" . $letter . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<br>";
foreach ($woorden as $woord) {
    echo "<div class=\"woord\" id=\"$woord\">" . $woord . "</div>";
}