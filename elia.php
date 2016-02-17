<html>
    <head>
       <script src="jquery.js"></script>
    </head>
    <body>
    <?php
    $file = "opdracht4.txt";
    include "leesBestand.php";
    include "ruwewoordzoeker.php";
    include "op_volgorde.php";
    // include "findHorizontaleNaarRechts.php";

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
                //$("div.woord").hover(function()
                //{
                 //   
                //    console.log(block.css("background-color"));
                //    if(block.css("background-color") != "rgb(255, 0, 0)")
                //        block.css("background-color", "red");
                //    else
                //        block.css("background-color", "white");
                //});
                //$("div.woord").click(function()
                //{
                //    var block = $(this);
                 //   console.log(block.css("background-color"));
                //    if(block.css("background-color") != "rgb(0, 255, 0)")
                //        block.css("background-color", "green");

//                });
            });
    </script>
    </body>
</html>
