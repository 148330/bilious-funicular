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
                $("div.woord").hover(function()
                {
                    var block = $(this);
                    console.log(block.css("background-color"));
                    if(block.css("background-color") != "rgb(255, 0, 0)")
                        block.css("background-color", "red");
                    else
                        block.css("background-color", "white");
                });
                $("div.woord").click(function()
                {
                    var block = $(this);
                    console.log(block.css("background-color"));
                    if(block.css("background-color") != "rgb(255, 0, 0)")
                        block.css("background-color", "red");
                    else
                        block.css("background-color", "white");
                });
            });
    </script>
    </body>
</html>