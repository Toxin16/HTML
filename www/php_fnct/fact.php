<?php
function fact ($n) {    
    if($n == 1) 
        return 1;
    else
        return $n*fact($n-1);  //자기 자신을 호출 = 재귀함수(recursive function)
}                               //(=되부름 함수, 자기호출함수)
function fact_for ($n) {
    $factVal = 1;
    for($i=1;$i<=$n;$i++) {
        $factVal = $factVal * $i;
    }
    return $factVal;
}
print fact(5) . "<br>";
print fact_for(5). "<br>";
?>