<?php
$op = fopen("./juliet.txt", "rb");
if(!$op) die ("could not open file");   #die = 메세지 출력후 스크립트 종료

while ($line = fgets ($op, 1024))   #fgets = 한 줄씩 가져옴 (한 줄 최대 1024)
print $line . "<br>";
fclose ($op);
?>