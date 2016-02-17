<html>
    <head>
       <script src="jquery.js"></script>
    </head>
    <body>
        <form action="elia.php" method="post">
            <select name="opdracht">
                <option value="opdracht1.txt">opdracht 1</option>
                <option value="opdracht2.txt">opdracht 2</option>
                <option value="opdracht3.txt">opdracht 3</option>
                <option value="opdracht4.txt">opdracht 4</option>
                <option value="opdracht5.txt">opdracht 5</option>
                <option value="opdracht6.txt">opdracht 6</option>
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
                //    console.log(block.css("background-color"));
                //    if(block.css("background-color") != "rgb(0, 255, 0)")
                //        block.css("background-color", "green");

                //});
            });
    </script>
    </body>
</html>
