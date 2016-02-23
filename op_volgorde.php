<?php

$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
echo "<table border='1px solid black'>";
foreach ($ruweWoordzoeker as $x => $rij) {
    echo "<tr>";
    foreach ($rij as $y => $letter) {
       // $classInfo = haalClassOpVoor($i, $j); // bv class='kelk  olifant'
        $classInfo = "";
        if (isset($classInformatie[$x][$y])) {
            $classInfo = "class='" . implode(' ', $classInformatie[$x][$y]) . "'";
        }
        echo "<td style='height: 25px; width: 25px;'$classInfo>" . $letter . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
//Maakt van het array van de woordzoeker een tabel

echo "<br>";
foreach ($woorden as $woord) {
    echo "<div class=\"woord\" id=\"$woord\">" . $woord . "</div>";
    //Geeft elke letter een div en een class
}