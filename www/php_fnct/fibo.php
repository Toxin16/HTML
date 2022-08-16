<?php
function fibo($n) {     //피보나치
    if($n == 0 || $n == 1) 
        return $n;
    else
        return (fibo ($n - 1) + fibo ($n - 2));
}

for ($i = 0; $i <= 6; $i++){
print "fibo($i) = ".fibo($i)."<br>";
}
print fibo(35). "<br>"; //재귀함수 잘못쓰면 독
?>
