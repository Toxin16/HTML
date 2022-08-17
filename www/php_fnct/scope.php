<?php
function counts() {
    $i = 0;     //local variable
    $i = $i + 10;
    global $g;
    $g++;
}
$g = 0;         //global variable
while ($g < 10) {
    counts();
    print $g . "<br>";
}
?>