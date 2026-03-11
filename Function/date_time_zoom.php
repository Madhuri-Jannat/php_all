<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo time();
    echo "<br>";
    echo date("d");   //date
    echo "<br>";
    echo date("D"); //week
    echo "<br>";
    echo date("m");  //month
    echo "<br>";
    echo date("M");   //sort month name
    echo "<br>";
    echo date("y");
    echo "<br>";
    echo date("Y");
     echo "<br>";
    echo date("n");  //month numeric value
    echo "<br>";
    echo date("L");  //leap  year return 0,1
    echo "<br>";
    echo date("F");   //month full name
    echo "<br>";




    echo date("d-m-y");  //full formate
    echo "<br>";
    echo date("D/M/Y");
    echo "<br>";
    echo date("d/m/y");
    echo "<br>";

    //time
    echo date("r");
    echo "<br>";
    echo date("a");
    echo "<br>";
    echo date("A");
    echo "<br>";
    echo date_default_timezone_get()."<br>".date("h");
    echo "<br>";
    echo date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo "<br>";
    echo date_default_timezone_get(). "today" . date("h");
    echo "<br>";


    $d1 = date_create("17-10-2003");
    $d2 = date_create("11-03-2026");
    echo "<br>";
    $diff = date_diff($d1,$d2);
    echo $diff->days ;
    echo "<br>";
    echo $diff-> m ;
    echo "<br>";
    echo $diff -> y
    

    ?>
</body>
</html>