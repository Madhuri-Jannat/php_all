<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 20;

    function test()
    {
        global $x;
        echo $x;

    }
    test();


    function add()
    {
        $y =34;
        global $x;
        echo $x + $y;
    } add();
    ?>
</body>
</html>