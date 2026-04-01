<?php
$result = fopen("first.txt", "r") or die("file is not found");
 
echo fread($result,filesize("first.txt"));
fclose($result);

echo readfile("data.txt");

$r= file_get_contents("data.txt");
echo $r;