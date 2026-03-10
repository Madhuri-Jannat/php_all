<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("country");
    echo "<br>";
    $info = "This is Bangladesh";
    echo strlen($info);
    echo "<br>";
    echo strtoupper(($info));
    echo "<br>";

    echo strtolower($info);
    echo "<br>";
    echo str_replace("Bangladesh","india",$info);
    echo "<br>";
    echo ucwords($info);
    echo "<br>";
    echo str_word_count($info);
    echo "<br>";
    echo ucfirst($info);
    echo "<br>";
    echo strrev($info);
    ?>
</body>
</html>