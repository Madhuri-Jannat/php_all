<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // (isset)
    //  varriable and value check
    $name;
    if(isset($name)) {
        echo "done";
    }else {
        echo "variable and value is not found" ,"<br>";
    }





     $name="madhuri";
    if(isset($name)) {
        echo "done";
    }else {
        echo "variable and value is not found";
    }

    ?>
</body>
</html>