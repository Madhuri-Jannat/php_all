<?php
if(isset($_POST['Login'])){
    $user = $_POST["username"];
    $p = $_POST["pass"];
    if($user=="admin" && $p =="12345"){
        echo "Successfully Login";
        header('location:main.php');
    }else {
        echo"invalid user or password";
    }
}
?>


<form  method="Post">
    Username:
    <input type="text" name="username" id=""> <br> <br>
    password:
    <input type="text" name="pass"> <br>
    <br>
    <input type="submit" name="Login" value="login">
</form>