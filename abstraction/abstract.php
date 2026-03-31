<?php
abstract class User{
    abstract public function getName();

    public function display(){
        echo "first";
    }
}

class B extends User{
    public function getName()
    {
        echo "Done";
    }
    public function display(){
        echo " first2";
    }
}
 class we extends  User{ 
    public function getName(){ 
        echo "Done2";
    }
  
    public function display(){ 
        echo "third3";
    }
}


$add = new we;
$add->getName();
$add->display();
?>