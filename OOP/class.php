<?php
class car{
    public $model = "sd12";
    public $color = "blue";
    public $name = "BMW";


    function info($c,$m)
    {
    //    $this->color = $c;
    //    $this->model = $m;
       return $this->name. $c .$m;
       
       
    }
}
$result = new car();
echo $result-> model;
echo "<br>";
echo $result-> color;
echo "<br>";
echo $result-> name;

echo "<br>";
 echo $result->info("black","md56");
