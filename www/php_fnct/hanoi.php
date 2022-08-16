<?php
function hanoi ($n, $from, $via, $to) {
    if($n == 1)
        print("move disc $n form $from to $to <br>");
    else {
        hanoi ($n -1, $from, $via, $to);
        print("move disc $n form $from to $to <br>");
        hanoi($n -1, $via, $from, $to);
    }
}
hanoi(5, 'A', 'B', 'C');
?>