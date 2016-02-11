<?php
$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
echo "<table border='1px solid black' style='width: 100%' height='20px'>";
foreach ($ruweWoordzoeker as $rij) 
{
    echo "<tr>";
    foreach ($rij as $letter)
    {
        echo "<td>" . $letter . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

 
echo "<br>";

foreach ($woorden as $woord)
{
    echo "<div class=\"woord\">" . $woord . "</div>";
}