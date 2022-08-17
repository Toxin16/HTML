<?php
function swap01 ($a, $b) {      // call by value
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$i = 3;
$j = 4;

print "\$i = $i, \$j = $j <br>";
swap01($i, $j);
print "\$i = $i, \$j = $j <br><hr>";

function swap02 (&$a, &$b) {     // call by referene(address, 주소에 있는 값 처리)
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$i = 3;
$j = 4;

print "\$i = $i, \$j = $j <br>";
swap02($i, $j);
print "\$i = $i, \$j = $j";
?>