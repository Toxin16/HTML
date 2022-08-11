<?php
$fruits = array(
    "Apple" => "Red",
    "Peach" => "Pink",
    "Banana" => "Yellow"
);

$numbers = array(1, 3, 5, 7, 9, 11);

for($i = 0; $i < count ($numbers); $i++) {
    print "$numbers[$i] ";
}
print "<hr>";

foreach ($numbers as $number) { // foreach = 배열 하나씩 반복 (키를 사용자가 정의, index로 접근 못함)
    print $number . " ";
}
print "<hr>";

foreach ($fruits as $fruit) {
    print $fruit . " ";
}
print "<hr>";
?>