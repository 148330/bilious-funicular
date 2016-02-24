<?php
if(isset($_POST["woordzoeker"]))
    $opdracht = $_POST["opdracht"];
//POST een variabele geven
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
        //Het tekstbestand waar alle woorden en de "tabel" in staan
    }
        include "leesBestand.php";
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        include "ruwewoordzoeker.php";
        //Van de '-' (uit de woordzoeker) random letters maken
        include "LRzoeken.php";
        //Woorden van Links naar Rechts zoeken
        include "RLzoeken.php";
        //Woorden van Rechts naar Links zoeken
        include "BoBezoeken.php";
        //Woorden van Boven naar Beneden zoeken
        include "BeBozoeken.php";
        //Woorden van Beneden naar Boven zoeken
        include "LR1zoeken.php";
        //Woorden van Links naar Rechts > van Onder naar Boven
        include "LR2zoeken.php";
        //Woorden van Links naar Rechts > van Boven naar Onder
        include "RL1zoeken.php";
        //Woorden van Rechts naar Links > van Onder naar Boven
        include "RL2zoeken.php";
        //Woorden van Rechts naar Links > van Boven naar Onder
        include "Niveau5.php";
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        include "op_volgorde.php";
        //Het schema in een tabel plaatsen
        // include "findHorizontaleNaarRechts.php //////////////////////////////////////////////////////////////////////////////////////
        // recursive function //////////////////////////////////////////////////////////////////////////////////////////////////////////
        // 8 queens problem ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // recursivi functie opzoeken        ///////////////////////////////////////////////////////////////////////////////////////////
        ?>
        <script type="text/JavaScript">
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            <?php
            include 'include_hovercode.php';
            //Zorgen dat de woorden die gevonden worden wanneer de muis een opdracht geeft van achtergrondkleur veranderen
            ?>
                    </script>
    </body>
</html>
