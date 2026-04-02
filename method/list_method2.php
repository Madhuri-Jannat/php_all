<?php
$files = file("data.txt");
foreach($files as $file){
    list($x,$y,$z)=explode(",","$file");
    echo "ID:".$x."<br>"."Name:".$y."<br>"."Address:".$z."<br>";
    };