<?php

// /pattern/modifier(i-case-insensative)
// preg_match all dile dob gulo k search korbe

$str = "This is regular expresion";
$pattern = "/i/";
echo preg_match_all($pattern,$str);
echo "<br>";
echo preg_match($pattern,$str);
echo "<br>";
$data= "We have a plan";
$p = "/plan/i";
echo preg_replace($p,"idea",$data);