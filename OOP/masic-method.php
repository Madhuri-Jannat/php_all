<?php
class car 
{
    public $name;
    public $color;

    public function __destruct()
    {
        echo " <br> bye";
    }

    public function __construct()
    {
       echo "Hello world <br>";
    }
}
  $result= new car();





//   
class car1
{
    public $name;
    public $color;
    
    public function __destruct()
    {
        echo " <br> bye";
    }

    public function __construct( $n,$c)
    {
       echo "Hello " . $this ->name=$n." is ".$this-> color = $c;
    }
}
  $result= new car1("Toyota","Red");


//   set
class car2 {
    public $name;
    public $color;


    public function setName($nam)
    {
        $this->name = $nam;
    }
    public function getName()
    {
        return $this->name;
    }
}

  $result2= new car2();
     $result2->setName("BMWwwwwwwwwwww");
     echo "<br>";
     echo $result2->getName();

