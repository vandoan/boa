<html>
    <p>
  <?php
  // Create an array with several elements in it,
  // then sort it and print the joined elements to the screen
$animal = array("pig", 'deer', 'deer', 'frog', 'mouse'); 
sort($animal); 
print join( ", ", $animal); 
  ?>
  </p>
  <p>
  <?php
  // Reverse sort your array and print the joined elements to the screen
  
  rsort($animal); 
  print join( ", ", $animal); 

  ?>
  </p>
</html>