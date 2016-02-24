<?php
if(isset($_POST["woordzoeker"]))
    $opdracht = $_POST["opdracht"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <script src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <form action="index.php" method="post">
            <select name="opdracht">
                <option 
                    <?php 
                        if(isset($opdracht)) {
                            if($opdracht == "opdracht1.txt") {
                                echo "selected";
                            }
                        }
                    ?>
                    value="opdracht1.txt">Niveau 1</option>
                <option 
                    <?php 
                        if(isset($opdracht)) {
                            if($opdracht == "opdracht2.txt") {
                                echo "selected";
                        }
                    }
                    ?>
                    value="opdracht2.txt">Niveau 2</option>
                <option 
                    <?php 
                        if(isset($opdracht)) {
                           if($opdracht == "opdracht3.txt"){
                               echo "selected"; 
                            }   
                        }
                              
                    ?>
                    value="opdracht3.txt">Niveau 3</option>
                <option 
                    <?php 
                        if(isset($opdracht)) {
                            if($opdracht == "opdracht4.txt") {
                                echo "selected";
                            }
                        }
                    ?>
                    value="opdracht4.txt">Niveau 4</option>
                <option
                    <?php 
                        if(isset($opdracht)) {
                            if($opdracht == "opdracht5.txt") {
                                echo "selected";
                            }
                        }
                    ?>
                    value="opdracht5.txt">Niveau 5</option>
                <option 
                    <?php 
                        if(isset($opdracht)) {
                            if($opdracht == "opdracht6.txt") {
                                echo "selected";
                            }
                        }
                    ?>
                    value="opdracht6.txt">Niveau 6</option>
            </select>
            <input type="submit" name="woordzoeker" value="woordzoeker"/>
        </form>
    <?php
    if(isset($opdracht))
    {
        $file = $opdracht;
    }
    else{
        $file="opdracht1.txt";
    }
        include "leesBestand.php";
        include "ruwewoordzoeker.php";
        include "LRzoeken.php";
        include "RLzoeken.php";
        include "BoBezoeken.php";
        include "BeBozoeken.php";
        include "LR1zoeken.php";
        //van L naar Rechts > van Onder naar Boven
        include "LR2zoeken.php";
        //van L naar Rechts > van Boven naar Onder
        include "RL1zoeken.php";
        //van R naar Links > van Onder naar Boven
        include "RL2zoeken.php";
        //van R naar Links > van Boven naar Onder
        include "Niveau5.php";
        include "op_volgorde.php";
        // include "findHorizontaleNaarRechts.php 
        // recursive function
        // 8 queens problem
        // recursivi functie opzoeken        
        ?>
        <script type="text/JavaScript">
            <?php
            include 'js/casper.php';
            ?>
                    </script>
    </body>
</html>
