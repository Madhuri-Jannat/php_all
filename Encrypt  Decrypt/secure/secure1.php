<?php
$password ="123";
echo md5($password);
echo "<br>";

echo hash('SHA512',"admin");
 echo "<br>";
 echo hash('SHA256',"asmin@");
  echo "<br>";
   echo "<br>";



 echo password_hash("admin",PASSWORD_DEFAULT);
  echo "<br>";
   echo "<br>";
   $pass= "admin";
  $very = password_hash("$pass",PASSWORD_DEFAULT);
  

   if(password_verify($pass,$very)){
    echo"valid";
   }else{
    echo "invalid";
   }



   echo "<br>";
//    base64_encode
//   base64_decode

 $store ="1234";
 echo base64_encode($store);
echo "<br>";
 echo base64_decode("MTIzNA==");

