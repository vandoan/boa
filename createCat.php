<!DOCTYPE html>
<html>
    <head>
    <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
      <p>
        <?php
          // Your code here
        class Cat{
            public $isAlive = true; 
            public $numLegs = 4; 
        public $name; 
        
        public function __construct($name){
            $this->name = $name; 
        }
        
        public function meow(){
            return "Meow meow"; 
            }
        }
        
        $codecat = new Cat("CodeCat");
        
        echo $codecat->meow() . '<br/>'; 
        echo "legs: " . $codecat->numLegs . '<br/>';
        echo "alive: " . $codecat->isAlive;
        ?>
      </p>
    </body>
</html>