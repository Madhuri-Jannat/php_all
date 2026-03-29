<?php
class Student {
    public $name= "iftiytul";
    public $age;
    public $address;
    public $id;
    public $subject;

    public function details($n)
    {
        echo "my name is " . $this->name=$n;
    }

    public function __construct()
    {
        echo "Hello PWAD <br>";
    }

    public function __destruct()
    {
       echo "Good bye <br>";
    }
}
class Teacher extends Student {
    public $experiance;
    public function teacherDetails()
    {
        echo "Hello Teacher";
    }
}
class Authority  extends Teacher{
    public $position = " my position is third";
}
$st = new Student();
echo "<br>";
$st -> details("madhuri <br>");
echo "<br>";
$tr= new Teacher();
echo $tr->name;
echo "<br>";
$tr-> teacherDetails();
$at =new Authority();
echo $at->  position;