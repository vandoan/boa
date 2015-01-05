<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
 $myArray = array(
    'dog', 'cat', 'lion');
    


      // On the line below, output one of the values to the page:
     echo $myArray[1] . "<br/><br/>";
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
     for ($i = 0; $i < count($myArray); $i++){
        echo $myArray[$i] . "<br />"; 

     }
     
      ?>
    </p>