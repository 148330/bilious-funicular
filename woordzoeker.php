<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <script src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <form action="woordzoeker.php" method="post">
           <input type="file" name="opdracht" required=""/>
            <br/>
            <input type="submit" name="verzend" value="woordzoeker"/>
            <br/>
            <br/>
        </form>
    <?php
    if(isset($_POST["verzend"])){
        $opdracht = $_POST["opdracht"];
        $file = $opdracht;  //POST een variabele geven
    }
 
        include "leesBestand.php";
       //Het leest het tekstbestand in en scheid de woorden van de woordzoeker en stopt ze in een array
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
        include "op_volgorde.php";
        //Het schema in een tabel plaatsen
        ?>
        <script type="text/JavaScript">
            <?php
            include 'include_hovercode.php';
            //Zorgen dat de woorden die gevonden worden wanneer de muis een opdracht geeft van achtergrondkleur veranderen
            ?>
                    </script>
    </body>
</html>
