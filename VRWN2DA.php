<html>
    <head>
        <script src="js/jquery.js"/>
        <script>
            $(document).ready(function ()) {
<?php
foreach ($woorden as $woord) {
    generatehovercode($woord);
    ${'#woord'} . mousein(function() {
                ${'.woord'} . css("color", "red");
            });
}
?>
            });
        </script>
    </head>
    <body>


    </body>
</html>