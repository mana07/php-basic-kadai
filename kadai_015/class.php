

<?php
        
   class Food{
        private $name;
        private $price;


        public function __construct(string $name,int $price){
          $this->name=$name;
          $this->price=$price;
        }
          public function show_price(int $price) {
            $this->price=$price;
            echo $this->price;
        }
         
    }   
         
        $food=new Food('potato',250);
        print_r($food);
        echo '<br>';

        
       

  class Animal{
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name,int $height,int $weight){
      
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
      }

      public function show_height(int $height){
        $this->height=$height;
        echo $this->height;

      }

    }
      $animal=new Animal('dog',60,150);
      print_r($animal);
      echo '<br>';
      
      $pricenumber=new Food('pottato',250);
      $pricenumber->show_price(250);
      echo '<br>';

      $heightnumber=new Animal('dog',60,150);
      $heightnumber->show_height(60);
?>
 