<?php

$mail ="sumi@gmail.com";
$f="/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
echo preg_match($f,$mail);