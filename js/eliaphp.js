/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function ()
{
    
    console.log("1");
    
$('#kelk').mousein(function() { 
${'.kelk'}.css('color', 'red'); 
})
;   
}); 
//var woord = <?php echo $woord; ?>;
$(document).ready(function ()
{
    
    console.log("1");
    include "generateHoverCode.php";
    foreach($woorden as $woord)     
        generateHoverCode($woord);
    /*

    $("div#kelk").click(function () {
        $(".kelk").unbind('mouseout');
    }).mouseover(function () {
        $(".kelk").css("background-color", "red");
    }).mouseout(function () {
        $(".kelk").css("background-color", "white");
    });
    $("div#olifant").click(function () {
        $(this).unbind('mouseout');
    }).mouseover(function () {
        $(this).css("background-color", "red");
    }).mouseout(function () {
        $(this).css("background-color", "white");
    });
    */
});


//.dblclick(function(){
//<?php
//$x=0;
//$y=0;
//$word=0;
//  foreach($ruwewoordzoeker as $line){
//      foreach($line as $char){
//         if(checkLetter($char, $wordPos, $woord)){
//             echo "$char at $x, $y; <br />";
//            searchNeighBors($x, $y, $woordzoeker);
//         }
//    $y = $y + 1;
//     }
//  $x = $x + 1;
//     }

//        function searchNeighbors($x, $y, $woordzoeker){
//             $neighbors = [
//[$x - 1  ,   $y - 1],
//[$x - 1  ,   $y + 0],    
//[$x - 1  ,   $y + 1], 
//[$x + 0  ,   $y - 1],   
//               [$x + 0  ,   $y + 1],   
//[$x + 1  ,   $y - 1],  
//[$x + 1  ,   $y + 0], 
//[$x + 1  ,   $y + 1],
//         ];
//         foreach($neighbors as $coords){
//              $coordX = $coords[0];
//             $coordY = $coords[1];
//             if(isset($woordzoeker[$coordX][$coordY])){
//                $letter = $woordzoeker[$coordX][$coordY];
//                 echo"$coordX, $coordY is $letter\n";
//             }
//        }
//     }

//                 function checkLetter($char, $position, $woord){
//                    foreach($woord as $word){
//                       if($char == $word[$position]){
//                          return true;
//                     }
//                }
//               return false;
//          } ?>
//     });

//console.log(block.css("background-color"));
//if(block.css("background-color") != "rgb(255, 0, 0)")
//    block.css("background-color", "red");
//else
//    block.css("background-color", "white");
//});
//$("div.woord").click(function()
//{
//    var block = $(this);
//    console.log(block.css("background-color"));
//    if(block.css("background-color") != "rgb(0, 255, 0)")
//        block.css("background-color", "green");
               