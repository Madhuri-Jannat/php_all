<?php
if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $data=$username.",".$password."\n";
    file_put_contents("info.txt",$data,FILE_APPEND);
    $msg="Registration Succesfull";
    header("location:login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class = "register-box">
    <h2>Registration</h2>

    <?php
    if(isset($msg)){
        echo"<div class ='msg'>$msg</div>";
    }
    ?>

    <form action="" method="post">
        username <br>
        <input type="text"name="username" required>
        <br> <br>
        password <br>
        <input type="text" name="password" required>
        <br> <br>
        <button name="register">Register</button>
    </form>
    <a href="login.php">Go to login</a>


   </div> 
</body>
</html>