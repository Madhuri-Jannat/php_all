<?php

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $username . "," . $password . "\n";

    file_put_contents("info.txt",$data,FILE_APPEND);

    $msg = "Registration Successful";
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<div class="register-box">

<h2>Registration</h2>

<?php
if(isset($msg)){
    echo "<div class='msg'>$msg</div>";
}
?>

<form method="post">

Username <br>
<input type="text" name="username" required>
<br><br>

Password <br>
<input type="password" name="password" required>
<br><br>

<button name="register">Register</button>

</form>

<br>
<a href="login.php">Go to Login</a>

</div>

</body>
</html>
