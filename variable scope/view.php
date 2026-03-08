<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_REQUEST['uname'];
    echo "<br>";
    echo $_REQUEST['email'];
    ?>
    <form action="#" method="post">
        User Name : <br>
        <input type="text" name="uname" id=""> <br> 
        Email: <br>
        <input type="text" name="email" id=""> <br> <br>
        <input type="submit" value="submit">

    </form>
</body>
</html>