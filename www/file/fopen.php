<?php
$fileop = fopen("./juliet.txt", "r");
if(!$fileop) die("Could not open fileop");
while($line = fgets($fileop, 1024)) {
    print $line ."<br>";
}

fclose($fileop);
?>
