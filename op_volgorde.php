<?php

$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
echo "<table border='1px solid black' style='width: 100%' height='20px'>";
foreach ($ruweWoordzoeker as $i => $rij) {
    echo "<tr>";
    foreach ($rij as $j => $letter) {
       // $classInfo = haalClassOpVoor($i, $j); // bv class='kelk  olifant'
        $classInfo = "";
        if (isset($classInformatie[$i][$j])) {
            $classInfo = "class='" . implode(' ', $classInformatie[$i][$j]) . "'";
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