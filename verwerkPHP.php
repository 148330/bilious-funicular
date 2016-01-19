<?php
    $file = $_POST["opdracht"];
    $fh = fopen($file, 'r');
    $data = fgets($fh);
    while(! feof($data))
        {
        echo fgets($data). "<br />";
        }
    fclose($fh);     
?>