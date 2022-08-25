<?php
session_start();
session_destroy();
print $_SESSION['apple']."<br>";
print $_SESSION['banana']."<br>";
print $_SESSION['cherry']."<br>";
?>
<a href="testDest.php">destroy Function Test</a>