<?php
function a() {
    global $n;
    $n = "A";
    $m = "M";
    print "$n, $m<br>";
}
$n = "N"; $m = "Money";
a();
print "$n, $m<br>";
?>