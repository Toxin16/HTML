<?php
function my_log ($parm, $base = 2) {
    $result = log($parm) / log($base);
    return $result;
}
print my_log(8,2) . "<br>";
print my_log(8) . "<br>";   //인자가 한개일때 base는 2(디폴트)
print my_log(9,3) . "<br>";
print my_log(1024) . "<br>";
?>