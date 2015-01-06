<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        const stealth = "MAXIMUM"; 
      }

      if (Ninja::stealth) {
      echo "MAXIMUM";
      } 
      
      
      ?>
    </p>
  </body>
</html>