<?php
$fruits = array(    //배열 fruits 생성
    "Apple" => "Red",
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"
);
$fruits1 = array(   //배열 fruits1 생성
    "Apple" => "Red",
    "Pear" => array("Color1" => "Brown", "Color2" => "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"
);
print $fruits1["Pear"]["Color1"]."<br>";    // 2차원 배열 fruits1의 pear번째 배열 Color1번째 요소 출력
print $fruits1["Tomato"][0]."<br>";
print "**********Before********** <br>";
print_r($fruits);
print "<br><br>";
print "**********After********** <br>";
unset($fruits["Pear"], $fruits["Banana"]);  //배열 fruits의 pear번째, Banana번째 요소 삭제
print_r($fruits);
print "<br><br>";
?>