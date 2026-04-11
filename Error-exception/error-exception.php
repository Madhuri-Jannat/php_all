<?php

$a=10;
try{
    if($a<30){
        throw new Exception("valid number");
    }else{
        throw new Exception("invalid number");
    }
}catch(Exception $e){
    echo"your error is:".$e->getMessage(). "<br>";
}finally{
    echo"this is finally done my work";
}

?>