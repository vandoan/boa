<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class King {
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        echo King::proclaim(); 
      ?>
    </p>
  </body>
</html>