<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['upload'])){

    $file = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if(($ext == "jpg" || $ext == "png") && $size <= 3*1024*1024){

        move_uploaded_file($temp,"uploads/".$file);

        $msg = "File Uploaded Successfully";

    }else{

        $error = "Only JPG/PNG allowed and Max Size 3MB";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload System</title>
</head>
<body>

<div class="container">

<div class="header">
    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
    <a href="logout.php">Logout</a>
</div>

<div class="upload-box">

<h3>Upload Image</h3>

<?php
if(isset($msg)) echo "<p class='msg'>$msg</p>";
if(isset($error)) echo "<p class='error'>$error</p>";
?>

<form method="post" enctype="multipart/form-data">

<input type="file" name="file" required>
<br><br>

<button name="upload">Upload</button>

</form>

</div>

<h2 style="color:black; text-align:center;">Image Gallery</h2>

<div class="gallery">

<?php

$folder = "uploads/";

if(!is_dir($folder)){
    mkdir($folder);
}

$files = scandir($folder);

foreach($files as $file){

    if($file != "." && $file != ".."){

        echo "<div class='card'>";
        echo "<img src='uploads/$file'>";
        echo "<div class='filename'>$file</div>";
        echo "</div>";

    }
}

?>

</div>

</div>

</body>
</html>