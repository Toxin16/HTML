<?php
session_start();
$_SESSION['$g'] = "This is a session variable.";
?>
<a href="./session2.php">Next page</a>