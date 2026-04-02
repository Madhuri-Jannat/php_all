<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        enter your number : <input type="number" name="marks" id="">
        <input type="submit" name="submit" value="check value">
    </form>
    <?php

    if(isset($_POST['submit'])){
        $marks = $_POST['marks'];
        $count=0;
        {
            if ($marks <=1){
                echo $marks."The number is not prime";
            }
            else{
                for($i=2; $i <$marks; $i++){
                    if($marks % $i ===0){
                        $count++;
                        break;
                    }
                }
                if($count==0){
                    echo $marks."its prime number";
                } else {
                    echo $marks."its not prime";
                }
            }
        }
    }

        ?>



</body>

</html>