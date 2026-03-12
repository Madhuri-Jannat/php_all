<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $marry = array(
        array(4, 5, 4, 3, 5),
        array(2, 4, 7, 7, 8),
        array(4, 6, 8, 9, 3),

    );
    print_r($marry);
    echo "<br>";
    $arr = [
        ["a", "b", "c", "e"],
        ["A", "B", "C", "D"],
        [2, 3, 4, 5, 4],
    ];

    print_r($arr);

    echo "<br>";




    //  multidimentional array for loop use



    $students = array(
        array("Rahim", 20, "A"),
        array("Karim", 22, "B"),
        array("Salam", 21, "A+")
    );

    for ($i = 0; $i < count($students); $i++) {
        for ($j = 0; $j < count($students[$i]); $j++) {
            echo $students[$i][$j] . " ";
        }
        echo "<br>";
    }

// ul and li use kore
    $students = array(
        array("Rahim", 20, "A"),
        array("Karim", 22, "B"),
        array("Salam", 21, "A+")
    );

    for ($i = 0; $i < count($students); $i++) {
        echo "<h3> catagori". ($i + 1). "</h3>";
        echo "<ul>";
        for ($j = 0; $j < count($students[$i]); $j++) {
            echo "<li>" .$students[$i][$j] . "</li> ";
        }
        echo "</ul>";
    }

    ?>
</body>

</html>