<?php
 $x = 10; //koto gula number chai seta mean kora
 $a = 0;
 $b = 1;
 $sum = 0;
  echo "Fibonacci Series: ";

  for($i=1; $i<=$x; $i++){
    echo $a ." ";
    $sum += $a;


    $next = $a + $b;
    $a = $b;
    $b = $next;
  }

  echo "<br> Sum of Fibonacci Series: ". $sum;

?>