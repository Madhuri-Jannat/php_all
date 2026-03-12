<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$c = array ("ab","bc","bn","dc","bv","gh","fg","re",);
$h = array_chunk($c,2);
print_r($h);
echo "<br>";
echo json_encode($h);
    ?>
</body>
</html>