<!DOCTYPE html>
<html>
  <head>
    <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
      <p>
        <!-- Your code here -->
      <?php 
      class Dog{
          public $numLegs = 4; 
          public $name; 
          public function bark(){
            return "Woof!";
          }
          
          public function __construct($name){
              $this->name = $name; 
           }
   
          
      }
          $dog1 = new Dog("Barker"); 
          $dog2 = new Dog("Amigo"); 
          
          echo $dog1->bark(); 
          echo $dog2->greet(); 
      ?>
      
      </p>
    </body>
</html>