<html>
    <p>
  <?php
  // Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
$animals = array(); 
print count($animals) . "<br>"; 

array_push($animals, "pig");
array_push($animals, "mouse");
array_push($animals, "deer");
array_push($animals, "rabbit");
array_push($animals, "frog");
print count($animals); 
  ?>
  </p>
</html>