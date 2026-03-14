<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        enter marks: <input type="number" name="marks" id="">
        <input type="submit" name = "submit" value = "check grade">
    </form>

    <?php 
    if(isset ($_POST['submit'])){
        $marks = $_POST['marks'];


        if($marks >=80 ){
            echo "grade: A+";

        }elseif($marks>=70){
            echo "grade: A";
        }elseif($marks>=60){
            echo "grade : A-";
        }elseif($marks>=50){
            echo "grade : B";
        }elseif($marks>=40){
            echo "grade: C";
        }elseif($marks>=33){
            echo "grade: D";
        } else {
            echo "grade: F";
        }
    }
    
    
    
    ?>
</body>
</html>