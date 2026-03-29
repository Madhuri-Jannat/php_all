<?php


class student {
    public $name = "sumi";
    private $age =22;
    protected $degree = "BSC";



    private function pInfo()
    {
     echo "this is my property";
    }
    public function pInfoDetails()
    {
        echo "this is only me".$this ->pInfo();
    }

    public function fullinfo()
    {
        echo $this-> name;
        echo "<br>";
        echo $this-> age;
         echo "<br>";
        echo $this-> degree;
         echo "<br>";
    }
}
class Child extends Student {
    public function show() {
        echo "my degree" . $this-> degree;
    }
   
}
$result = new student();
echo $result -> name ;
echo "<br>";
// echo $result -> age;
// echo $result ->  degree;
$result -> fullinfo();
$Child=new Child();
$Child-> pInfoDetails();