<?php

    $fh = fopen($file, 'r');
    $data = fgets($fh). "<br />";
    fclose($fh);
    echo $data;
    
    $ruweWoordzoeker = Array(); // van de regels
    $woorden = Array(); // woorden

//$bestand = "invoer1.txt";
//$x = file($bestand);
//printf($x);     
//if(isset($_POST["verzend"]))
//{
//$file = $_POST['opdracht'];
//}
      
