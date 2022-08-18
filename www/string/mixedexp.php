<?php
$i = 1;
$f = 1.1;
$str = "string";
$b = true;
print var_dump($i)."<br>";
print var_dump($f)."<br>";
print var_dump($str)."<br>";
print var_dump($b)."<br>";
print var_dump($i+1)."<br>";
print var_dump($f+1)."<br>";
print var_dump($str."01")."<br>";
print var_dump($b && false)."<br>";

$str1 = "http://www.php.edu/testurl.html?name=kim&age=28";
$str2 = parse_url ($str1);
var_dump ($str2);
print "<br>";
parse_str ($str2["query"], $abc);
print_r($abc);
print "이름: " . $abc["name"] . "<br>";
print "나이: " . $abc["age"] . "<br>";
?>