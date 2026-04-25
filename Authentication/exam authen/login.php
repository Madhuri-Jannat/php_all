<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = file("info.txt");

    foreach($data as $line){

        $user = explode(",", $line);

        if($user[0] == $username && trim($user[1]) == $password){

            $_SESSION['user'] = $username;

            header("Location: upload.php");
            exit();

        }

    }

    $error = "Invalid Username or Password";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<div class="login-box">

<h2>Login</h2>

<?php
if(isset($error)){
    echo "<div class='error'>$error</div>";
}
?>

<form method="post">

Username <br>
<input type="text" name="username" required>
<br><br>

Password <br>
<input type="password" name="password" required>
<br><br>

<button name="login">Login</button>

</form>

<br>
<a href="registration.php">Register</a>

</div>

</body>
</html>
