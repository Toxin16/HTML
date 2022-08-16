<?php
// 숫자를 배열로 생성
$numbers = array();
for($i=0;$i<45;$i++) {      //0~44
    array_push($numbers,$i + 1);    //1~45 (1(0+1)부터 45(44+1)까지 배열에 넣음)
}
// 1줄에 5개씩만 출력
$cnt = 0;
for($i=0;$i<45;$i++) {
    print "\$numbers[$i] = $numbers[$i]";   // \(back slash)는 $를 문자로 표현하게 함
    $cnt++;
    if($cnt%5 == 0) {
        print "<br>";
    }
}
print "<hr>";
// 숫자를 shuffle
shuffle($numbers);
for($i=0;$i<45;$i++) {
    print "\$numbers[$i] = $numbers[$i]";
    $cnt++;
    if($cnt%5 == 0) {
        print "<br>";
    }
}
print "<hr>";
// 6개만 출력
$lotto = array();
for($i=0;$i<6;$i++) {
    array_push($lotto,$numbers[$i]);
}
for($i=0;$i<6;$i++) {
    print "$numbers[$i] ";
}
print "<hr>";
// 숫자를 정렬
sort($lotto);
for($i=0;$i<6;$i++) {
    print "$numbers[$i] ";
}
?>