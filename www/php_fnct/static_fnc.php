<?php
function inc01() {
    $i = 1;
    print $i. "<br>";
    $i++;
}
for($i=0;$i<10;$i++) {
    inc01();        // 함수 10번 호출 (1번 호출 후 메모리에서 삭제)
}

print "<hr>";
function inc02() {
    static $i = 1;  // 정적 변수는 한 번만 초기화 됨. 메모리에 상주
    print $i. "<br>";
    $i++;
}
for($i=0;$i<10;$i++) {
    inc02();    // 함수 한 번만 호출 (static으로 메모리에 남음)
}
?>