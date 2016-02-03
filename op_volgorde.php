<?php
$letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
echo "<table border='1px solid black' style='width: 100%' height='20px'>";
    echo "<tr>";
        foreach ($oWoord as $r) {
            //if ($r == $letters){
                echo "<td>".$r."</td>";
            //}
            //else{
            //    echo "</tr>"."<tr>";
            //}
        }
    echo "</tr>";
echo "</table>";

//print implode('', $oWoord); 
echo "<br>";
print_r($w);
