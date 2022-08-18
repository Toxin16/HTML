<?php
$str1 = "we are the world";

$str2 = ucfirst($str1);
$str3 = ucwords($str1);

print $str2."<br>";
print $str3."<br>";

$info = parse_url("http://naver.com");
print_r($info)."<br>";
print $info["scheme"]."<br>";
print $info["host"]."<br>";
?>