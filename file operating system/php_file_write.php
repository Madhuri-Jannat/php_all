<?php
$r = fopen("store.txt","w");
$u= "this is new window";
fwrite($r,$u);
fclose($r);


// read
$read = fopen("store.txt","r");

echo fread($read,filesize("store.txt"));