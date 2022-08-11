<?php
# 배열 생성후 원소 대입
$abc = array("Computer", "Math", "Physics", "Music", "Electronics");
# 배열 키 지정후 원소대입
$def = array(
    "David" => "Computer",  // David번째. index역할
    "Alice" => "Math",
    "Elsa" => "Physics",
    "Bob" => "Music",
    "Chris" => array("Electronics", "Statistics")
);
print $abc[0] . "<br>";   // 배열 abc의 0번째 원소 출력
print $abc[1] . "<br>";
print $def["David"] . "<br>";
print $def["Alice"] . "<br>";
print $def["Chris"][0] . "<br>";

$def["Ko"] = "History";
print_r($def);
print "<hr>";
unset($def["Ko"]);
print_r($def);
print "<hr>";
?>