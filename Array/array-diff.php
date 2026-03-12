<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $array1= ["a","b","c"];
    $array2= ["a","w","t"];
    $array3= ["g","a","u"];

   $result = array_diff($array2,$array3,$array1);
   print_r($result);

    ?>
</body>
</html>