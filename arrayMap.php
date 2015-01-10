<html>
  <head>
    <title>Making the Connection</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices.
        $car = array(2012, 'blue', 5, 'BMW');

        // This is an associative array.
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' => "BMW");
            
        echo $car[3];
        echo '<br />';
            
        echo $assocCar['make'];
      ?>
    </p>
  </body>
</html>