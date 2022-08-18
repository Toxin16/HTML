<?php
$i = 6;
$f = 3.14159;
$s = "strings";
$b = true;

printf ("%d <br>", $i);
printf ("%f <br>", $f);
printf ("%s <br>", $s);
printf ("%d <br>", $b);

$str = 'one@two@three@four@five@six@seven@eight';
$value = explode('@', $str);    //@로 구분하여 str을 읽어옴,
// value 배열의 원소는 one, two ... eight
foreach ($value as $i) {
    printf ("%s <br>", $i);
}
?>