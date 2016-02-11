<html>
    <head>
       <script src="jquery.js"/>
       <script>
       $(document).Ready(function()){
           <?php
           foreach ($woorden as $woord) {
             generatehovercode($woord);
               ${'#woord'}. mousein(function(){
                 ${'.woord'}.css("color", "red");  
               });
           }
           ?>
       });
       </script>
    </head>
        <body>


        </body>
</html>