<?php
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str0 = "012345678901234567890123456";
print $str . "<br>";

$str1 = strrev($str);
print $str1 . "<br>";

print $str . "<br>";
print $str0 . "<br>";
print substr($str, 2, 5)."<br>";
print substr($str, 8, 5)."<br>";
print substr($str, 12, 5)."<br>";
print substr($str, -9, -8)."<br>";

$fruits = " Apple Banana Pear ";
$str3 = chop($fruits);  // chop == rtrim
print "start-" . $str3 . "-end<br>\n";
$str4 = rtrim($fruits);
print "start-" . $str4 . "-end<br>\n";
$str5 = ltrim($fruits);
print "start-" . $str5 . "-end<br>\n";
$str6 = trim($fruits);
print "start-" . $str6 . "-end<br>\n";
?>