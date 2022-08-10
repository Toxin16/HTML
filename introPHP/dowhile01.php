<?php
$i = 1;
do {
    $j = $i * 3;
    $i++;   # $i = $i + 1; == $i += 1; == ++$i;
    print $j . " ";
} while ($j < 100);

?>