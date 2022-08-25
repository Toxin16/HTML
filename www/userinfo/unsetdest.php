<?php
session_start();
$_SESSION['apple'] = 4;
$_SESSION['banana'] = 5;
$_SESSION['cherry'] = $cherry = 6;
?>
<a href="./unset.php">session_unset function</a><br>
<a href="./destroy.php">session_destroy function</a>