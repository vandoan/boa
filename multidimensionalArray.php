<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                        array('8 of Diamonds', 8));
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      // echo 'You have the ' . $deck[2][0] . '!';
      echo 'You have a ' . $deck[rand(1,count($deck))-1][rand(0,1)] . '!';
      // use count to find the number of array
      ?>
    </p>
  </body>
</html>