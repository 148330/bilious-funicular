<html>
    <head>
        <script src="js/jquery.js"/>
        <script>
            $(document).ready(function ()) {
<?php
include_once 'generateHoverCode.php';
foreach ($woorden as $woord) {
    generateHoverCode($woord);    
}
?>
            });
        </script>
    </head>
    <body>


    </body>
</html>