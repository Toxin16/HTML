<?php
function add($a, $b) {  //parameter
    $hap = $a + $b;
    return $hap;    // == return $a + $b;
}
function sub($a, $b) {  //parameter
    $hap = $a - $b;
    return $hap;    // == return $a - $b;
}
function mul($a, $b) {  //parameter
    $hap = $a * $b;
    return $hap;    // == return $a * $b;
}
function div($a, $b) {  //parameter
    $hap = $a / $b;
    return $hap;    // == return $a / $b;
}

print add (3, 5) . "<br>";   //argument
print sub (3, 5) . "<br>";
print mul (3, 5) . "<br>";
print div (3, 5) . "<br>";
?>
