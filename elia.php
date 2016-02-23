<html>
    <head>
       <script src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <form action="elia.php" method="post">
            <select name="opdracht">
                <option value="opdracht1.txt"> </option>
                <option value="opdracht1.txt">Niveau 1</option>
                <option value="opdracht2.txt">Niveau 2</option>
                <option value="opdracht3.txt">Niveau 3</option>
                <option value="opdracht4.txt">Niveau 4</option>
                <option value="opdracht5.txt">Niveau 5</option>
                <option value="opdracht6.txt">Niveau 6</option>
            </select>
            <input type="submit" name="woordzoeker" value="woordzoeker"/>
        </form>
    <?php
    if(isset($_POST["woordzoeker"]))
    {
        $file = $_POST["opdracht"];
    }
    elseif(!isset($_POST["woordzoeker"])){
        $file="opdracht1.txt";
    }
        include "leesBestand.php";
        include "ruwewoordzoeker.php";
        include "generateClass2DArray.php";
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
