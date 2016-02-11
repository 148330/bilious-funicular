<html>
    <head>
       <script src="jquery-1.12.0.min.js">
       </script> 
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