<?php
session_start();
if(isset($_POST['login'])){
    $user=$_POST["username"];
    $password=$_POST['password'];

    $file=file("data.txt");

    foreach($file as $line){
        list($_username,$_password)=explode(",",$line);
        if(trim($_username)==$user && trim($_password)==$password){
           
         $_SESSION["sname"]=$user;

            header("location:data.php");

        }else{
            $msg = "username or password invalid";
        }
    }
}
?>
<form  method="Post">
    Username:
    <input type="text" name="username" id=""> <br> <br>
    password:
    <input type="text" name="password"> <br>
    <br>
    <input type="submit" name="login" value="login">
</form>
