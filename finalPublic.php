<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
         final public function honk() {
            return "HONK HONK!";
          // use final to make it overide all others
          }
        }

        class Bicycle extends Vehicle  {
          public function honk() { 
            return 'Beep beep!';
          } 
        }
           
        $bicycle = new Bicycle(); 
        echo $bicycle->honk(); 
        
        
      ?>
    </p>
  </body>
</html>