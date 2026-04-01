<?php
$write = file_put_contents("store.txt","hello madhuri \n",FILE_APPEND);
echo "successfully";
$result = file_get_contents("store.txt");