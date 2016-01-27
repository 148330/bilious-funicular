    <?php


$ruweWoordzoeker = Array(); // van de regels
$woorden = Array(); // woorden 
$a = false;
$file_handle = fopen("$file", "r");
while (!feof($file_handle)) {
    $line = fgets($file_handle);
    //print_r(strlen($line)); print "<br>";
    if ((strlen($line) > 2) && ($a == false)){
         $ruweWoordzoeker[] = $line; // append
    } 
    elseif (strlen($line) <= 2) {
        // nu komen de woorden
        $a = true;
        continue;
    }
    elseif ((strlen($line) > 2) && ($a == true)){
    $woorden[] = $line;
    //echo $line. "<br />";
    }
    
}
fclose($file_handle);

print "<pre>";
print_r($ruweWoordzoeker);
print_r($woorden);

