<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    $pig = rand(1,8); 
    print $pig; 
    ?>
    </p>

    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    
    
    $name = "vanderbilt"; 
    $length = strlen("vanderbilt");
     
     
    $lime = substr($name, rand(0, $length - 1), 1);
    
    ?>
    <?php 
    print $lime;
    
    ?>
    </p>
</html>