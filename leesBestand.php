    <?php


$ruweWoordzoeker = Array();
$woorden = Array();
$a = false;
$file_handle = fopen("$file", "r");
while (!feof($file_handle)) {
    $line = fgets($file_handle);
    if ((strlen($line) > 2) && ($a == false)){
        $rijArray = Array();
        for($x = 0; $x < strlen($line) - 2; $x++)
        {
            $rijArray[] = $line[$x];
        }
         $ruweWoordzoeker[] = $rijArray;
    } 
    elseif (strlen($line) <= 2) {
        $a = true;
        continue;
    }
    elseif ((strlen($line) > 2) && ($a == true)){
    $woorden[] = $line;
    }
    
}
fclose($file_handle);

print "<pre>";


