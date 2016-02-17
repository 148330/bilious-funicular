<html>
    <head>
       <script src="jquery.js"></script>
    </head>
    <body>
        <form action="elia.php" method="post">
            <select name="opdracht">
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
        include "op_volgorde.php";
        // include "findHorizontaleNaarRechts.php   
    //echo $ruweWoordzoeker[5][2];
        ?>
        <script type="text/JavaScript">
            $(document).ready(function()
            {
                console.log("1");
                
                $("div.woord").click(function() {
                    $(this).unbind('mouseout');  
                }).mouseover(function() {
                    $(this).css("background-color", "red");
                }).mouseout(function() {
                    $(this).css("background-color", "white");
                });
                //$("div.woord").click(function()
                //{<?php
                //$x=0;
                //$y=0;
                //$word=0;
                 //   foreach($ruwewoordzoeker as $line){
                   //     foreach($line as $char){
                    //        if(checkLetter($char, $wordPos, $woord)){
                    //            echo "$char at $x, $y; <br />";
                    //            searchNeighBors($x, $y, $woordzoeker);
                    //        }
                    //    $y = $y + 1;
                     //   }
                    //$x = $x + 1;
                   // }
    
  //                  function searchNeighbors($x, $y, $woordzoeker){
   //                     $neighbors = [
                            //[$x - 1  ,   $y - 1],
                            //[$x - 1  ,   $y + 0],    
                            //[$x - 1  ,   $y + 1], 
                            //[$x + 0  ,   $y - 1],   
     //                       [$x + 0  ,   $y + 1],   
                            //[$x + 1  ,   $y - 1],  
                            //[$x + 1  ,   $y + 0], 
                            //[$x + 1  ,   $y + 1],
    //                    ];
    //                    foreach($neighbors as $coords){
    //                        $coordX = $coords[0];
    //                        $coordY = $coords[1];
    //                        if(isset($woordzoeker[$coordX][$coordY])){
    //                            $letter = $woordzoeker[$coordX][$coordY];
    //                            echo"$coordX, $coordY is $letter\n";
    //                        }
    //                    }
    //                }
    
  //                  function checkLetter($char, $position, $woord){
   //                     foreach($woord as $word){
    //                        if($char == $word[$position]){
     //                           return true;
      //                      }
       //                 }
        //                return false;
         //           }
                //    console.log(block.css("background-color"));
                //    if(block.css("background-color") != "rgb(255, 0, 0)")
                //        block.css("background-color", "red");
                //    else
                //        block.css("background-color", "white");
                //});
                //$("div.woord").click(function()
                //{
                //    var block = $(this);
                //    console.log(block.css("background-color"));
                //    if(block.css("background-color") != "rgb(0, 255, 0)")
                //        block.css("background-color", "green");
          //      ?>
                });
            });
    </script>
    </body>
</html>
