<?php
$a =[
   [1,"madhuri","madhuri@gmail.com"],
   [2,"madhuri","madhuri@gmail.com"],
   [3,"madhuri","madhuri@gmail.com"],
   [4,"madhuri","madhuri@gmail.com"],
];

foreach($a as list($id,$name,$email)){
    echo "$name | $email <br>";
}


// list method 2

$data =[
    "1,sumi,dhaka",
    "2,rumi,khulna",
    "3,tumi,barisal"
];

foreach($data as $d){
    list($id,$name,$city)= explode(",","$d");

    echo "ID: ". $id."<br>";
    echo "Name:".$name ."<br>";
    echo "City:" .$city . "<br>";
    };