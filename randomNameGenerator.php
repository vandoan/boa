<html>
    <p>
  <?php
  // Create an array and push on the names
    // of your closest family and friends
    $ff = array(); 
    array_push($ff, "Bill");
    array_push($ff, "Steve");
    array_push($ff, "Lora");
    array_push($ff, "Beth");
    array_push($ff, "Mike");

  // Sort the list
  sort($ff); 

  // Randomly select a winner!
$winner = $ff[(rand(0, (count($ff) - 1)))]; 
  // Print the winner's name in ALL CAPS
  print strtoupper($winner); 
  ?>
  </p>
</html>