<?php
$filep = fopen("romeo.txt", "w");   # 파일 쓰기(파일 없으면 생성)
if(!$filep) die("Can't open file" . $filep);
fputs($filep, "ROMEO:
I take thee at thy word:
Call me but love, and I'll be new baptized;
Henceforth I never will be Romeo.");
fclose($filep);

$filep = fopen("romeo.txt", "r"); 
if(!$filep) die("Can't open file" . $filep);

while($line = fgets ($filep, 1024)) {
    print $line. "<br>";
}
fclose ($filep);
?>