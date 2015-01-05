<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
$name = "vanderbilt"; 
$dog = substr($name, 0,3);
print $dog;     
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $cat = strtoupper($name);
    print $cat; 
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $turtle = strtolower($name);
    print $turtle; 
    
    ?>
  </p>
</html>