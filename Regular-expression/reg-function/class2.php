<?php

// preg_match_all();


$data ="at2th";
$p="/^[a-z]{2,4}$/";
echo preg_match_all($p,$data); 
echo "<br>";


// requirment:

$data = "asd345";
$s="/^[a-zA-Z0-9]{3,8}$/";
echo preg_match_all($s,$data);

