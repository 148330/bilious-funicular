<?php
    $file_handle = fopen("$file", "r");
        while (!feof($file_handle)) 
            {
            $line = fgets($file_handle);
            echo $line. "<br />";
            }
    fclose($file_handle);

    $ruweWoordzoeker = Array(); // van de regels
    $woorden = Array(); // woorden
    