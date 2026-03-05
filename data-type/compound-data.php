<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compound data type</title>
</head>
<body>
 <?php
//  array

$a = array("a","b",3);
var_dump($a);
echo "<br>";


// object
// example 1
class Student2
{
    public $name = "Lucky";
}
 
$obj2 = new Student2();
var_dump($obj2);


 ?>
</body>
</html>