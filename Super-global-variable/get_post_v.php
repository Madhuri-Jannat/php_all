<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        super global variable
        $_REQUEST,$_GET,$_POST
    </h1>
     <?php

      $store= $_REQUEST['n'];
      echo "Name:" .$store  

     ?>
    <div>
        <form action="" method="post">
            Name :
            <input type="text" name="n">
            <input type="submit" value="submit">

        </form>
    </div>



<?php

      $store= $_POST['n'];
      echo "Name:" .$store  
      
     ?>
    <div>
        <form action="" method="get">
            Name :
            <input type="text" name="n">
            <input type="submit" value="submit">

        </form>
    </div>




</body>
</html>