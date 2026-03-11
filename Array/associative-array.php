<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $person =['name'=> 'ifty','age' => 15, 'round' => '70'];
    $a_key = array_key_first($person);
    $a_value = $person[$a_key];
    echo $a_key . ':' . $a_value;
    ?>
</body>
</html>